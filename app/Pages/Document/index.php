<?php
declare(strict_types=1);

namespace App\Pages\Document;

/**
 * @file pages/document/index.php
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2017-2026 Rochmady
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * [WIZDAM EDITION]
 * @brief Route dispatcher utama untuk Domain Dokumen Resmi (LoA, Sertifikat, dll).
 * Menangani URL: /document/...
 */

switch ($op) {
    //
    // Letter of Acceptance
    //
    case 'loa':
        define('HANDLER_CLASS', \App\Pages\Document\LoAHandler::class);
        import('app.Pages.Document.LoAHandler');
        break;

    //
    // certificate fo Editor & Reviewer
    //
    case 'certificate':
        define('HANDLER_CLASS', \App\Pages\Document\CertificateHandler::class);
        import('app.Pages.Document.CertificateHandler');
        break;
}
