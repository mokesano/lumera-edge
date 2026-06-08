<?php
// fix-psr4-surgical.php

$baseDir = __DIR__;

// Peta root namespace sesuai composer.json Anda
$mappings = [
    'core/Includes'          => 'Lumera\\Core',
    'core/Kernel'            => 'Lumera\\Kernel',
    'core/Modules'           => 'Lumera\\Modules',
    'plugins/generic'        => 'Lumera\\Plugins\\Generic',
    'plugins/gateways'       => 'Lumera\\Plugins\\Gateways',
    'plugins/importexport'   => 'Lumera\\Plugins\\Importexport',
    'plugins/oaiMetadataFormats' => 'Lumera\\Plugins\\Oaimetadataformats',
    'plugins/paymethod'      => 'Lumera\\Plugins\\Paymethod',
];

function getCorrectNamespace($filePath, $baseDir, $mappings) {
    $relativePath = str_replace($baseDir . DIRECTORY_SEPARATOR, '', $filePath);
    $relativePath = str_replace('\\', '/', $relativePath);
    
    foreach ($mappings as $dir => $rootNs) {
        $dir = str_replace('\\', '/', rtrim($dir, '/') . '/');
        if (strpos($relativePath, $dir) === 0) {
            $subPath = substr($relativePath, strlen($dir));
            $dirName = dirname($subPath);
            
            if ($dirName === '.') {
                return $rootNs; // File berada langsung di root mapping
            }
            
            $parts = explode('/', $dirName);
            $parts = array_map('ucfirst', $parts); // Pastikan folder PascalCase
            return $rootNs . '\\' . implode('\\', $parts);
        }
    }
    return null;
}

function fixFile($filePath, $baseDir, $mappings) {
    $content = file_get_contents($filePath);
    $originalContent = $content;
    $filename = pathinfo($filePath, PATHINFO_FILENAME); // Nama file tanpa .php
    
    // 1. PERBAIKI NAMESPACE (Hanya berdasarkan folder)
    $expectedNs = getCorrectNamespace($filePath, $baseDir, $mappings);
    if ($expectedNs) {
        if (preg_match('/^\s*namespace\s+([a-zA-Z0-9_\\\\]+)\s*;/m', $content)) {
            $content = preg_replace(
                '/^\s*namespace\s+[a-zA-Z0-9_\\\\]+\s*;/m',
                "namespace {$expectedNs};",
                $content,
                1
            );
        } else {
            // Inject jika belum ada
            if (preg_match('/<\?php\s*(declare\s*\([^)]+\)\s*;\s*)?/i', $content, $m, PREG_OFFSET_MATCH)) {
                $insertPos = $m[0][1] + strlen($m[0][0]);
                $content = substr($content, 0, $insertPos) . "\n\nnamespace {$expectedNs};\n" . substr($content, $insertPos);
            }
        }
    }

    // 2. PERBAIKI NAMA CLASS/INTERFACE/TRAIT agar sama dengan nama file
    // Regex ini mencari: class Foo, interface Foo, atau trait Foo
    if (preg_match('/\b(?:class|interface|trait)\s+([a-zA-Z0-9_]+)/i', $content, $matches)) {
        $currentName = $matches[1];
        
        // Jika nama class saat ini tidak sama dengan nama file (case-sensitive)
        if ($currentName !== $filename) {
            // Ganti deklarasi class/interface/trait
            $content = preg_replace(
                '/\b(?:class|interface|trait)\s+' . preg_quote($currentName, '/') . '\b/i',
                'class ' . $filename, // Kita asumsikan mayoritas adalah 'class'
                $content,
                1
            );
            
            // BONUS: Jika ada constructor gaya PHP 4 lama (function namaClass), ubah jadi __construct
            $content = preg_replace(
                '/\bfunction\s+' . preg_quote($currentName, '/') . '\s*\(/i',
                'function __construct(',
                $content
            );
        }
    }

    if ($content !== $originalContent) {
        file_put_contents($filePath, $content);
        return true;
    }
    return false;
}

function scanAndFix($dir, $baseDir, $mappings) {
    if (!is_dir($dir)) return 0;
    $iterator = new RecursiveIteratorIterator(
        new RecursiveDirectoryIterator($dir, RecursiveDirectoryIterator::SKIP_DOTS)
    );
    
    $count = 0;
    foreach ($iterator as $file) {
        if ($file->getExtension() === 'php') {
            if (fixFile($file->getPathname(), $baseDir, $mappings)) {
                $count++;
            }
        }
    }
    return $count;
}

echo "🚀 Starting Surgical PSR-4 Fix (Class Name & Namespace Alignment)...\n";

$dirsToScan = [
    $baseDir . '/core',
    $baseDir . '/plugins',
];

$totalFixed = 0;
foreach ($dirsToScan as $dir) {
    if (is_dir($dir)) {
        $count = scanAndFix($dir, $baseDir, $mappings);
        echo "✅ Fixed $count files in " . basename($dir) . "\n";
        $totalFixed += $count;
    }
}

echo "\n🎉 Done! Total files surgically corrected: $totalFixed\n";
echo "👉 Next step: Run 'composer dump-autoload --optimize'\n";