<?php
declare(strict_types=1);

namespace App\Pages\Order;

/**
 * @file pages/order/index.php
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2017-2026 Rochmady
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * [WIZDAM EDITION] Refactored for PHP 8.4 Strict Compliance & DDD
 * @brief Route dispatcher utama untuk Domain B2C / Publik
 * (Shopping Cart & Checkout).
 * Menangani URL: /order/cart dan /order/checkout
 */

switch ($op) {
    case 'cart':       // Menampilkan UI Keranjang Belanja
    case 'checkout':   // Memproses isi keranjang menjadi Invoice (POST)
        define('HANDLER_CLASS', \App\Pages\Order\OrderHandler::class);
        import('app.Pages.Order.OrderHandler');
        break;
}
