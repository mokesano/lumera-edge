<?php
// fix-psr4-master.php
$baseDir = __DIR__;

$directoriesToScan = [
    $baseDir . '/core/Modules',
    $baseDir . '/core/Kernel',
    $baseDir . '/plugins/generic',
    $baseDir . '/plugins/gateways',
];

// --- FASE 1: Rename Folder ke PascalCase ---
function renameFoldersToPascalCase($dir) {
    if (!is_dir($dir)) return;
    $items = scandir($dir);
    foreach ($items as $item) {
        if ($item === '.' || $item === '..') continue;
        $oldPath = $dir . DIRECTORY_SEPARATOR . $item;
        
        $newName = ucfirst($item);
        $newPath = $dir . DIRECTORY_SEPARATOR . $newName;
        
        if ($item !== $newName) {
            // Handle case-insensitive filesystem (Windows/macOS)
            if (file_exists($newPath)) {
                $tempPath = $newPath . '_temp_' . uniqid();
                rename($oldPath, $tempPath);
                rename($tempPath, $newPath);
            } else {
                rename($oldPath, $newPath);
            }
            echo "Renamed folder: $item -> $newName\n";
            $oldPath = $newPath; 
        }
        
        if (is_dir($oldPath)) {
            renameFoldersToPascalCase($oldPath);
        }
    }
}

echo "🚀 Step 1: Renaming folders to PascalCase...\n";
foreach ($directoriesToScan as $dir) {
    renameFoldersToPascalCase($dir);
}

// --- FASE 2: Fix Namespace & Use Statements ---
$mapping = [
    'core/Modules'      => 'Lumera\\Modules',
    'core/Kernel'       => 'Lumera\\Kernel',
    'plugins/generic'   => 'Lumera\\Plugins\\Generic',
    'plugins/gateways'  => 'Lumera\\Plugins\\Gateways',
];

function calculateExpectedNamespace($filePath, $mapping, $baseDir) {
    $relativePath = str_replace($baseDir . DIRECTORY_SEPARATOR, '', $filePath);
    $relativePath = str_replace('\\', '/', $relativePath);
    
    foreach ($mapping as $dir => $rootNamespace) {
        $dir = str_replace('\\', '/', $dir);
        if (strpos($relativePath, $dir . '/') === 0) {
            $subPath = substr($relativePath, strlen($dir . '/'));
            $parts = explode('/', $subPath);
            array_pop($parts); // Remove filename
            return $rootNamespace . '\\' . implode('\\', $parts);
        }
    }
    return null;
}

function fixNamespacesAndUses($dir, $mapping, $baseDir) {
    if (!is_dir($dir)) return;
    $iterator = new RecursiveIteratorIterator(
        new RecursiveDirectoryIterator($dir, RecursiveDirectoryIterator::SKIP_DOTS)
    );
    
    foreach ($iterator as $file) {
        if ($file->getExtension() === 'php') {
            $filePath = $file->getPathname();
            $content = file_get_contents($filePath);
            $originalContent = $content;
            
            $expectedNamespace = calculateExpectedNamespace($filePath, $mapping, $baseDir);
            
            if ($expectedNamespace) {
                // 1. Fix or inject namespace declaration
                if (preg_match('/^\s*namespace\s+([a-zA-Z0-9_\\\\]+)\s*;/m', $content)) {
                    $content = preg_replace(
                        '/^\s*namespace\s+[a-zA-Z0-9_\\\\]+\s*;/m',
                        "namespace {$expectedNamespace};",
                        $content,
                        1
                    );
                } else {
                    if (preg_match('/<\?php\s*(declare\s*\([^)]+\)\s*;\s*)?/i', $content, $m, PREG_OFFSET_MATCH)) {
                        $insertPos = $m[0][1] + strlen($m[0][0]);
                        $content = substr($content, 0, $insertPos) . "\n\nnamespace {$expectedNamespace};\n" . substr($content, $insertPos);
                    }
                }
            }
            
            // 2. Fix all 'use' statements globally
            $content = preg_replace_callback('/\buse\s+([a-zA-Z0-9_\\\\]+)(\s+as\s+[a-zA-Z0-9_]+)?;/', function($matches) {
                $ns = $matches[1];
                $alias = $matches[2] ?? '';
                
                if (strpos($ns, 'Core\\Modules') === 0 || strpos($ns, 'Core\\Kernel') === 0 || 
                    strpos($ns, 'App\\Pages\\Core') === 0 || strpos($ns, 'Lumera\\Modules') === 0 || 
                    strpos($ns, 'Lumera\\Kernel') === 0 || strpos($ns, 'Lumera\\Plugins') === 0) {
                    
                    $parts = explode('\\', $ns);
                    
                    if ($parts[0] === 'Core' && isset($parts[1]) && in_array($parts[1], ['Modules', 'Kernel'])) {
                        $parts[0] = 'Lumera';
                    }
                    if ($parts[0] === 'App' && isset($parts[1], $parts[2]) && $parts[1] === 'Pages' && $parts[2] === 'Core') {
                        array_splice($parts, 0, 3, ['Lumera', 'Kernel']);
                    }
                    
                    foreach ($parts as $i => $part) {
                        if ($part !== 'Lumera') $parts[$i] = ucfirst($part);
                    }
                    
                    return 'use ' . implode('\\', $parts) . $alias . ';';
                }
                return $matches[0];
            }, $content);
            
            if ($content !== $originalContent) {
                file_put_contents($filePath, $content);
            }
        }
    }
}

echo "\n🚀 Step 2: Fixing namespaces and use statements...\n";
$allDirs = array_merge($directoriesToScan, [$baseDir . '/app', $baseDir . '/core/Includes']);
foreach ($allDirs as $dir) {
    if (is_dir($dir)) fixNamespacesAndUses($dir, $mapping, $baseDir);
}

echo "\n✅ Done! Next: Handle file splitting/renaming manually (see guide).\n";