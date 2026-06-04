<?php
// rename-to-psr4.php
$directories = [
    __DIR__ . '/core/Includes',
    __DIR__ . '/core/Kernel',
    __DIR__ . '/core/Modules',
    __DIR__ . '/plugins/gateways',
    __DIR__ . '/plugins/generic',
    __DIR__ . '/plugins/importexport',
    __DIR__ . '/plugins/oaiMetadataFormats',
    __DIR__ . '/plugins/paymethod',
];

function processDirectory($dir) {
    if (!is_dir($dir)) return;
    $items = scandir($dir);
    
    foreach ($items as $item) {
        if ($item === '.' || $item === '..') continue;
        
        $oldPath = $dir . DIRECTORY_SEPARATOR . $item;
        $newName = ucfirst($item); // Kapitalisasi huruf pertama
        $newPath = $dir . DIRECTORY_SEPARATOR . $newName;
        
        if ($item !== $newName) {
            if (file_exists($newPath)) {
                echo "KONFLIK: $newPath sudah ada. Melewati $oldPath\n";
                continue;
            }
            rename($oldPath, $newPath);
            echo "Diubah: " . basename($oldPath) . " -> " . basename($newPath) . "\n";
            $oldPath = $newPath; 
        }
        
        if (is_dir($oldPath)) {
            processDirectory($oldPath); // Rekursif untuk sub-folder
        }
    }
}

foreach ($directories as $dir) {
    echo "Memproses: $dir\n";
    processDirectory($dir);
}
echo "Selesai! Semua folder dan file telah diubah ke PascalCase.\n";