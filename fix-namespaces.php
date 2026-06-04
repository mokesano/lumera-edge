<?php
// fix-namespaces.php

// Pemetaan direktori ke Root Namespace sesuai composer.json Anda
$mapping = [
    'core/Includes'          => 'Lumera\\Core',
    'core/Kernel'            => 'Lumera\\Kernel',
    'core/Modules'           => 'Lumera\\Modules',
    'plugins/gateways'       => 'Lumera\\Plugins\\Gateways',
    'plugins/generic'        => 'Lumera\\Plugins\\Generic',
    'plugins/importexport'   => 'Lumera\\Plugins\\Importexport',
    'plugins/oaiMetadataFormats' => 'Lumera\\Plugins\\Oaimetadataformats',
    'plugins/paymethod'      => 'Lumera\\Plugins\\Paymethod',
];

function calculateNamespace($filePath, $mapping) {
    $normalizedPath = str_replace('\\', '/', $filePath);
    
    foreach ($mapping as $dir => $rootNamespace) {
        $normalizedDir = str_replace('\\', '/', $dir);
        if (strpos($normalizedPath, $normalizedDir . '/') === 0) {
            $relativePath = substr($normalizedPath, strlen($normalizedDir . '/'));
            $parts = explode('/', $relativePath);
            array_pop($parts); // Hapus nama file, sisakan folder
            
            // Konversi nama folder menjadi PascalCase untuk namespace
            $namespaceParts = array_map('ucfirst', $parts);
            
            return $rootNamespace . '\\' . implode('\\', $namespaceParts);
        }
    }
    return null;
}

function processFile($filePath, $mapping) {
    $expectedNamespace = calculateNamespace($filePath, $mapping);
    if (!$expectedNamespace) return;

    $content = file_get_contents($filePath);
    $originalContent = $content;

    // 1. Perbaiki atau Suntikkan Namespace
    if (preg_match('/^\s*namespace\s+([a-zA-Z0-9_\\\\]+)\s*;/m', $content, $matches)) {
        // Jika namespace sudah ada tapi salah, ganti
        if ($matches[1] !== $expectedNamespace) {
            $content = preg_replace(
                '/^\s*namespace\s+[a-zA-Z0-9_\\\\]+\s*;/m',
                "namespace {$expectedNamespace};",
                $content,
                1
            );
        }
    } else {
        // Jika namespace belum ada, suntikkan setelah <?php
        if (preg_match('/<\?php\s*(declare\s*\([^)]+\)\s*;\s*)?/i', $content, $m, PREG_OFFSET_MATCH)) {
            $insertPos = $m[0][1] + strlen($m[0][0]);
            $content = substr($content, 0, $insertPos) . "\n\nnamespace {$expectedNamespace};\n" . substr($content, $insertPos);
        }
    }

    // 2. Perbaikan dasar untuk statement 'use' lama (lowercase)
    $useReplacements = [
        '/use\s+core\\\\Includes\\\\/i' => 'use Lumera\\Core\\',
        '/use\s+core\\\\Kernel\\\\/i'   => 'use Lumera\\Kernel\\',
        '/use\s+core\\\\Modules\\\\/i'  => 'use Lumera\\Modules\\',
    ];
    foreach ($useReplacements as $pattern => $replacement) {
        $content = preg_replace($pattern, $replacement, $content);
    }

    // Simpan hanya jika ada perubahan
    if ($content !== $originalContent) {
        file_put_contents($filePath, $content);
        echo "Updated: " . basename($filePath) . "\n";
    }
}

function scan($dir, $mapping) {
    if (!is_dir($dir)) return;
    $iterator = new RecursiveIteratorIterator(
        new RecursiveDirectoryIterator($dir, RecursiveDirectoryIterator::SKIP_DOTS)
    );
    foreach ($iterator as $file) {
        if ($file->getExtension() === 'php') {
            processFile($file->getPathname(), $mapping);
        }
    }
}

echo "🚀 Memulai injeksi namespace PSR-4...\n";
foreach (array_keys($mapping) as $dir) {
    echo "📂 Memindai $dir...\n";
    scan(__DIR__ . '/' . $dir, $mapping);
}
echo "✅ Selesai! Sekarang jalankan: composer dump-autoload --optimize\n";