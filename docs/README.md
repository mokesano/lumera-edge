# Lumera Edge

Lumera Edge adalah platform open-source untuk manajemen editorial dan penerbitan ilmiah. Proyek ini menargetkan modernisasi workflow penerbitan dengan struktur aplikasi yang lebih modular, autoload Composer, dan standar kode PHP modern.

<p align="left">
  <a href="https://github.com/mokesano/lumera-edge">
    <img src="https://img.shields.io/badge/PHP-^8.1-777BB4?style=for-the-badge&logo=php&logoColor=white" alt="PHP Version">
  </a>
  <a href="https://github.com/mokesano/lumera-edge/blob/main/docs/LICENSE">
    <img src="https://img.shields.io/badge/license-GPL%203.0--only-blue?style=for-the-badge" alt="License">
  </a>
  <a href="https://packagist.org/packages/lumera/lumera-edge">
    <img src="https://img.shields.io/badge/packagist-wizdam%2Flumera--edge-F28D1A?style=for-the-badge&logo=packagist&logoColor=white" alt="Packagist">
  </a>
  <a href="https://github.com/mokesano/lumera-edge/security/advisories">
    <img src="https://img.shields.io/badge/security-policy-important?style=for-the-badge&logo=github" alt="Security Policy">
  </a>
</p>

## Informasi utama

| Item | Nilai |
| --- | --- |
| Bahasa utama | PHP |
| Versi PHP | 8.1+ |
| Lisensi | GPL-3.0-only |
| Autoload | Composer PSR-4 dan classmap legacy |
| Direktori publik | `public/` |
| Vendor Composer | `core/Library/` |

## Kebutuhan sistem

- PHP 8.1 atau lebih baru.
- Composer 2.x.
- MySQL/MariaDB atau PostgreSQL.
- Web server yang dapat diarahkan ke direktori `public/`.
- Ekstensi PHP sesuai `composer.json`, termasuk `curl`, `gd`, `json`, `mbstring`, `xml`, dan `zip`.

## Instalasi singkat

```bash
git clone https://github.com/mokesano/lumera-edge.git
cd lumera-edge
composer install
```

Siapkan file konfigurasi dan database sesuai kebutuhan environment, lalu arahkan document root web server ke `public/`.

Untuk menjalankan server lokal sederhana:

```bash
php -S localhost:8000 -t public/
```

## Struktur penting

| Path | Fungsi |
| --- | --- |
| `app/` | Kode aplikasi dan domain Lumera |
| `core/` | kernel, module legacy, include, dan library Composer |
| `plugins/` | plugin aplikasi |
| `public/` | entry point web |
| `resources/` | resource frontend/template |
| `docs/` | dokumentasi proyek |
| `docs-develop/` | catatan pengembangan dan laporan teknis |

## Standar kode

- Namespace aplikasi mengikuti PSR-4 sesuai mapping di `composer.json`.
- File PHP baru sebaiknya mengikuti PSR-12.
- Kode legacy di `core/` masih dapat dimuat melalui classmap Composer jika belum siap PSR-4.
- Hindari class duplikat pada classmap; gunakan namespace atau nama class yang spesifik untuk kode baru.

## Perintah pengembangan

```bash
composer validate --strict
composer dump-autoload --strict-psr --optimize
composer run-script cs-check
composer run-script analyze
composer test
```

> Catatan: beberapa perintah membutuhkan dependency development yang sudah terpasang.

## Keamanan

Jangan mempublikasikan detail kerentanan secara terbuka. Laporkan isu keamanan melalui kanal resmi maintainer proyek.

## Lisensi

Lumera Edge dirilis dengan lisensi GPL-3.0-only. Lihat file lisensi proyek untuk informasi lengkap.
