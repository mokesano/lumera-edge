<?php
declare(strict_types=1);

namespace App\Pages\Section;

/**
 * @file pages/section/index.php
 *
 * [WIZDAM] - Native Route Registry for 'section' pages.
 * Menangani URL: /{context}/section/{section_path}
 */

switch ($op) {
    case 'index':
    case 'about':
    case 'articles':
    case '':
        // Jika hanya mengakses /section
        define('HANDLER_CLASS', \App\Pages\Section\SectionHandler::class);
        import('app.Pages.Section.SectionHandler');
        break;

    default:
        // Menangkap semua string dinamis (nama section) sebagai $op
        define('HANDLER_CLASS', \App\Pages\Section\SectionHandler::class);
        import('app.Pages.Section.SectionHandler');
        break;
}
