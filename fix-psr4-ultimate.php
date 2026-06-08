<?php
// fix-psr4-ultimate.php

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
    'plugins/reports'        => 'Lumera\\Plugins\\Reports',
    'plugins/themes'         => 'Lumera\\Plugins\\Themes',
];

function getExpectedNamespace($filePath, $baseDir, $mappings) {
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
            // Pastikan setiap bagian folder di-capitalize (PascalCase)
            // ucfirst aman: 'admin' -> 'Admin', 'GeoIp' -> 'GeoIp'
            $parts = array_map('ucfirst', $parts);
            
            return $rootNs . '\\' . implode('\\', $parts);
        }
    }
    return null;
}

function fixFile($filePath, $baseDir, $mappings) {
    $content = file_get_contents($filePath);
    $originalContent = $content;
    $filename = pathinfo($filePath, PATHINFO_FILENAME);
    
    $expectedNs = getExpectedNamespace($filePath, $baseDir, $mappings);
    if (!$expectedNs) {
        return false; // File tidak termasuk dalam mapping, abaikan
    }

    // 1. Hapus deklarasi namespace lama (jika ada)
    $content = preg_replace('/^\s*namespace\s+[a-zA-Z0-9_\\\\]+\s*;/m', '', $content);

    // 2. Suntikkan namespace yang benar tepat setelah <?php dan declare (jika ada)
    $pattern = '/(<\?php\s*(?:declare\s*\([^)]+\)\s*;\s*)?)/i';
    if (preg_match($pattern, $content, $matches, PREG_OFFSET_CAPTURE)) {
        $insertPos = $matches[1][1] + strlen($matches[1][0]);
        $content = substr($content, 0, $insertPos) . "\n\nnamespace {$expectedNs};\n" . substr($content, $insertPos);
    } else {
        // Fallback jika file tidak dimulai dengan <?php (jarang terjadi)
        $content = "<?php\n\nnamespace {$expectedNs};\n\n" . $content;
    }

    // 3. Perbaiki nama Class/Interface/Trait agar sesuai dengan nama file
    if (preg_match('/\b(?:class|interface|trait)\s+([a-zA-Z0-9_]+)/i', $content, $matches)) {
        $currentName = $matches[1];
        
        if ($currentName !== $filename) {
            // Ganti nama class/interface/trait (kita asumsikan mayoritas adalah 'class')
            $content = preg_replace(
                '/\b(?:class|interface|trait)\s+' . preg_quote($currentName, '/') . '\b/i',
                'class ' . $filename,
                $content,
                1 // Hanya ganti deklarasi utama yang pertama
            );
            
            // BONUS: Jika ada constructor gaya PHP 4 lama (function NamaClass), ubah jadi __construct
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

echo "🚀 Starting ULTIMATE PSR-4 Fix (Namespace & Class Name Alignment)...\n";

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