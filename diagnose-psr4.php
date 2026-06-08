<?php
// diagnose-psr4.php

$baseDir = __DIR__;
// Kita ambil satu contoh file yang pasti di-skip berdasarkan log Anda
$targetFile = $baseDir . '/plugins/generic/AnnouncementFeed/SettingsForm.php';

if (!file_exists($targetFile)) {
    echo "❌ File tidak ditemukan: $targetFile\n";
    echo "Pastikan path-nya benar sesuai struktur folder Anda.\n";
    exit;
}

$content = file_get_contents($targetFile);
$filename = pathinfo($targetFile, PATHINFO_FILENAME);

echo "=== DIAGNOSTIC REPORT ===\n";
echo "📁 File Path : $targetFile\n";
echo "📄 File Name : $filename.php\n\n";

// 1. Cek semua deklarasi namespace
preg_match_all('/namespace\s+([a-zA-Z0-9_\\\\]+)\s*;/', $content, $nsMatches);
if (count($nsMatches[1]) === 0) {
    echo "🚨 NAMESPACE : TIDAK ADA (Global Namespace)\n";
} else {
    echo "✅ NAMESPACE : " . implode(', ', $nsMatches[1]) . "\n";
}

// 2. Cek semua deklarasi class/interface/trait
preg_match_all('/\b(?:class|interface|trait)\s+([a-zA-Z0-9_]+)/i', $content, $classMatches);
echo "📦 CLASSES   : " . implode(', ', $classMatches[1]) . "\n\n";

// 3. Analisis Masalah
echo "=== ANALISIS MASALAH ===\n";
$expectedNs = 'Lumera\\Plugins\\Generic\\AnnouncementFeed';

if (count($nsMatches[1]) === 0) {
    echo "❌ MASALAH 1: File tidak memiliki namespace. Seharusnya: $expectedNs\n";
} elseif ($nsMatches[1][0] !== $expectedNs) {
    echo "❌ MASALAH 1: Namespace salah. Ditemukan: '{$nsMatches[1][0]}', Seharusnya: $expectedNs\n";
} else {
    echo "✅ Namespace sudah BENAR.\n";
}

if (count($classMatches[1]) > 1) {
    echo "❌ MASALAH 2: File berisi LEBIH DARI 1 CLASS. PSR-4 melarang ini. Composer akan SKIP file ini.\n";
    echo "   Solusi: Pisahkan class-class tambahan ke file terpisah.\n";
} elseif ($classMatches[1][0] !== $filename) {
    echo "❌ MASALAH 2: Nama class ('{$classMatches[1][0]}') TIDAK SAMA dengan nama file ('$filename').\n";
} else {
    echo "✅ Nama class sudah BENAR.\n";
}

echo "=========================\n";