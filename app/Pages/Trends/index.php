<?php
declare(strict_types=1);

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
        import('app.Pages.Trends.TrendsHandler');
        break;

    case 'popular':
        define('HANDLER_CLASS', \App\Pages\Trends\MostPopularHandler::class);
        import('app.Pages.Trends.MostPopularHandler');
        break;

    case 'download':
        // Disiapkan untuk AI selanjutnya
        define('HANDLER_CLASS', \App\Pages\Trends\MostDownloadHandler::class);
        import('app.Pages.Trends.MostDownloadHandler');
        break;

    case 'cited':
        // Disiapkan untuk AI selanjutnya
        define('HANDLER_CLASS', \App\Pages\Trends\MostCitedHandler::class);
        import('app.Pages.Trends.MostCitedHandler');
        break;
}
