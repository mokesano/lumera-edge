<?php
// nuclear-fix-psr4.php

$baseDir = __DIR__;
$mappings = [
    'core/Modules'           => 'Lumera\\Modules',
    'core/Kernel'            => 'Lumera\\Kernel',
    'plugins/generic'        => 'Lumera\\Plugins\\Generic',
    'plugins/gateways'       => 'Lumera\\Plugins\\Gateways',
];

function getExpectedNamespace($filePath, $baseDir, $mappings) {
    $relativePath = str_replace($baseDir . DIRECTORY_SEPARATOR, '', $filePath);
    $relativePath = str_replace('\\', '/', $relativePath);
    
    foreach ($mappings as $dir => $rootNs) {
        $dir = str_replace('\\', '/', rtrim($dir, '/') . '/');
        // Gunakan stripos untuk case-insensitive matching (penting untuk Windows)
        if (stripos($relativePath, $dir) === 0) {
            $subPath = substr($relativePath, strlen($dir));
            $dirName = dirname($subPath);
            
            if ($dirName === '.') return $rootNs;
            
            $parts = explode('/', $dirName);
            $parts = array_map('ucfirst', $parts);
            return $rootNs . '\\' . implode('\\', $parts);
        }
    }
    return null;
}

$dirsToScan = [$baseDir . '/core/Modules', $baseDir . '/core/Kernel', $baseDir . '/plugins/generic', $baseDir . '/plugins/gateways'];
$totalFixed = 0;

foreach ($dirsToScan as $dir) {
    if (!is_dir($dir)) continue;
    
    $iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dir, RecursiveDirectoryIterator::SKIP_DOTS));
    
    foreach ($iterator as $file) {
        if ($file->getExtension() !== 'php') continue;
        
        $filePath = $file->getPathname();
        $content = file_get_contents($filePath);
        $originalContent = $content;
        $filename = pathinfo($filePath, PATHINFO_FILENAME);
        $expectedNs = getExpectedNamespace($filePath, $baseDir, $mappings);
        
        if (!$expectedNs) continue;

        // 1. HAPUS PAKSA semua deklarasi namespace yang ada (lebih agresif)
        $content = preg_replace('/namespace\s+[^;]+;/', '', $content);

        // 2. SUNTIKKAN namespace yang benar setelah <?php
        if (preg_match('/(<\?php\s*(?:declare\s*\([^)]+\)\s*;\s*)?)/i', $content, $matches, PREG_OFFSET_CAPTURE)) {
            $insertPos = $matches[1][1] + strlen($matches[1][0]);
            $content = substr($content, 0, $insertPos) . "\n\nnamespace {$expectedNs};\n" . substr($content, $insertPos);
        }

        // 3. PERBAIKI NAMA CLASS (Hanya class utama pertama yang ditemukan)
        if (preg_match('/\b(?:class|interface|trait)\s+([a-zA-Z0-9_]+)/i', $content, $classMatch)) {
            $currentClass = $classMatch[1];
            if ($currentClass !== $filename) {
                // Ganti deklarasi class pertama yang ditemukan
                $content = preg_replace(
                    '/\b(?:class|interface|trait)\s+' . preg_quote($currentClass, '/') . '\b/i',
                    'class ' . $filename,
                    $content,
                    1
                );
                // Ganti constructor gaya PHP 4 jika ada
                $content = preg_replace('/\bfunction\s+' . preg_quote($currentClass, '/') . '\s*\(/i', 'function __construct(', $content);
            }
        }

        if ($content !== $originalContent) {
            file_put_contents($filePath, $content);
            echo "🔧 FIXED: " . str_replace($baseDir . '/', '', $filePath) . "\n";
            echo "   ➔ NS: $expectedNs | Class: $filename\n";
            $totalFixed++;
        }
    }
}

echo "\n🎉 Nuclear Fix Selesai. Total file dimodifikasi: $totalFixed\n";
echo "👉 SEKARANG JALANKAN: composer clear-cache && composer dump-autoload --optimize\n";