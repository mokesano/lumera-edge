<?php
declare(strict_types=1);

Lumera\Pages\Trends\TrendsHandler;
Lumera\Pages\Trends\MostPopularHandler;
Lumera\Pages\Trends\MostDownloadHandler;
Lumera\Pages\Trends\MostCitedHandler;
namespace App\Pages\Trends;

/**
 * @file pages/trends/index.php
 *
 * [WIZDAM] - Native Route Registry for 'trends' pages.
 * Menangani URL: /{context}/trends/{op}
 */

switch ($op) {
    case 'index':
    case '':
        // [WIZDAM] - Halaman Hub Utama
        define('HANDLER_CLASS', \App\Pages\Trends\TrendsHandler::class);
        
        break;

    case 'popular':
        define('HANDLER_CLASS', \App\Pages\Trends\MostPopularHandler::class);
        
        break;

    case 'download':
        // Disiapkan untuk AI selanjutnya
        define('HANDLER_CLASS', \App\Pages\Trends\MostDownloadHandler::class);
        
        break;

    case 'cited':
        // Disiapkan untuk AI selanjutnya
        define('HANDLER_CLASS', \App\Pages\Trends\MostCitedHandler::class);
        
        break;
}
