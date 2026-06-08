<?php
declare(strict_types=1);

Lumera\Pages\Reedem\RedeemHandler;
namespace App\Pages\Reedem;

/**
 * @file pages/redeem/index.php
 *
 * [WIZDAM EDITION]
 * @brief Route dispatcher utama untuk Domain Loyalti / Dompet Virtual.
 */

switch ($op) {
    case 'index':    // Dasbor dompet virtual
    case 'exchange': // Proses penukaran poin
        define('HANDLER_CLASS', \App\Pages\Reedem\RedeemHandler::class);
        
        break;
}
