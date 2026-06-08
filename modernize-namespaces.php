<?php
// modernize-namespaces.php

$baseDir = __DIR__;

// 1. Perbaikan deklarasi namespace akar (tanpa trailing backslash)
$exactReplacements = [
    'namespace Core\\Modules;'    => 'namespace Lumera\\Modules;',
    'namespace Core\\Kernel;'     => 'namespace Lumera\\Kernel;',
    'namespace App\\Modules;'     => 'namespace Lumera\\Modules;',
    'namespace App\\Pages\\Core;' => 'namespace Lumera\\Kernel;',
];

// 2. Perbaikan referensi namespace (dengan trailing backslash) menggunakan Regex
// Regex ini memastikan kita tidak salah mengganti string seperti "MyCore\Modules\"
$patterns = [
    '/(?<![a-zA-Z0-9_])Core\\\\Modules\\\\/' => 'Lumera\\Modules\\',
    '/(?<![a-zA-Z0-9_])Core\\\\Kernel\\\\/'  => 'Lumera\\Kernel\\',
    '/(?<![a-zA-Z0-9_])App\\\\Modules\\\\/'  => 'Lumera\\Modules\\',
    '/(?<![a-zA-Z0-9_])App\\\\Pages\\\\Core\\\\/' => 'Lumera\\Kernel\\',
];

// 3. Aturan injeksi namespace untuk plugin
$pluginRules = [
    'plugins/generic'  => 'Lumera\\Plugins\\Generic',
    'plugins/gateways' => 'Lumera\\Plugins\\Gateways',
    'plugins/importexport' => 'Lumera\\Plugins\\Importexport',
    'plugins/oaiMetadataFormats' => 'Lumera\\Plugins\\Oaimetadataformats',
    'plugins/paymethod' => 'Lumera\\Plugins\\Paymethod',
    'plugins/reports' => 'Lumera\\Plugins\\Reports',
    'plugins/themes' => 'Lumera\\Plugins\\Themes',
];

function getExpectedPluginNamespace($filePath, $baseDir, $rules) {
    $relativePath = str_replace($baseDir . DIRECTORY_SEPARATOR, '', $filePath);
    $relativePath = str_replace('\\', '/', $relativePath);
    
    foreach ($rules as $dir => $rootNamespace) {
        $dir = str_replace('\\', '/', $dir);
        if (strpos($relativePath, $dir . '/') === 0) {
            $subPath = substr($relativePath, strlen($dir . '/'));
            $parts = explode('/', $subPath);
            array_pop($parts); // Hapus nama file
            
            // Pastikan semua bagian folder PascalCase
            $parts = array_map('ucfirst', $parts);
            
            return $rootNamespace . '\\' . implode('\\', $parts);
        }
    }
    return null;
}

function processFile($filePath, $baseDir, $pluginRules, $patterns, $exactReplacements) {
    $content = file_get_contents($filePath);
    $originalContent = $content;

    // --- FASE 1: Perbaikan Global ---
    foreach ($exactReplacements as $search => $replace) {
        $content = str_replace($search, $replace, $content);
    }
    foreach ($patterns as $pattern => $replacement) {
        $content = preg_replace($pattern, $replacement, $content);
    }

    // --- FASE 2: Injeksi Namespace untuk Plugin ---
    $isPlugin = false;
    foreach ($pluginRules as $dir => $ns) {
        $pluginDir = $baseDir . DIRECTORY_SEPARATOR . str_replace('/', DIRECTORY_SEPARATOR, $dir);
        if (strpos($filePath, $pluginDir) === 0) {
            $isPlugin = true;
            break;
        }
    }

    if ($isPlugin) {
        // Jika file belum memiliki deklarasi namespace, suntikkan yang benar
        if (!preg_match('/^\s*namespace\s+[^;]+;/m', $content)) {
            $expectedNamespace = getExpectedPluginNamespace($filePath, $baseDir, $pluginRules);
            if ($expectedNamespace) {
                if (preg_match('/<\?php\s*(declare\s*\([^)]+\)\s*;\s*)?/i', $content, $m, PREG_OFFSET_MATCH)) {
                    $insertPos = $m[0][1] + strlen($m[0][0]);
                    $content = substr($content, 0, $insertPos) . "\n\nnamespace {$expectedNamespace};\n" . substr($content, $insertPos);
                }
            }
        }
    }

    if ($content !== $originalContent) {
        file_put_contents($filePath, $content);
        return true;
    }
    return false;
}

function scanDirectory($dir, $baseDir, $pluginRules, $patterns, $exactReplacements) {
    if (!is_dir($dir)) return 0;
    $iterator = new RecursiveIteratorIterator(
        new RecursiveDirectoryIterator($dir, RecursiveDirectoryIterator::SKIP_DOTS)
    );
    
    $count = 0;
    foreach ($iterator as $file) {
        if ($file->getExtension() === 'php') {
            if (processFile($file->getPathname(), $baseDir, $pluginRules, $patterns, $exactReplacements)) {
                $count++;
            }
        }
    }
    return $count;
}

echo "🚀 Starting comprehensive namespace modernization...\n";

$dirsToScan = [
    $baseDir . '/core',
    $baseDir . '/app',
    $baseDir . '/plugins',
];

$totalFixed = 0;
foreach ($dirsToScan as $dir) {
    if (is_dir($dir)) {
        $count = scanDirectory($dir, $baseDir, $pluginRules, $patterns, $exactReplacements);
        echo "Updated $count files in " . basename($dir) . "\n";
        $totalFixed += $count;
    }
}

echo "\n✅ Done! Total files updated: $totalFixed\n";
echo "👉 Next step: Run 'composer dump-autoload --optimize'\n";