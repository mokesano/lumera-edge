<?php
declare(strict_types=1);

Lumera\Pages\Copyeditor\SubmissionCopyeditHandler;
Lumera\Pages\Copyeditor\SubmissionCommentsHandler;
Lumera\Pages\Copyeditor\CopyeditorHandler;
namespace App\Pages\Copyeditor;

/**
 * @defgroup pages_copyeditor
 */

/**
 * @file pages/copyeditor/index.php
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @ingroup pages_copyeditor
 * @brief Handle requests for copyeditor functions.
 *
 */

switch ($op) {
    //
    // Assignment Tracking
    //
    case 'submission':
    case 'completeCopyedit':
    case 'completeFinalCopyedit':
    case 'uploadCopyeditVersion':
    //
    // Misc.
    //
    case 'downloadFile':
    case 'viewFile':
    //
    // Proofreading Actions
    //
    case 'authorProofreadingComplete':
    case 'proofGalley':
    case 'proofGalleyTop':
    case 'proofGalleyFile':
    //
    // Metadata Actions
    //
    case 'viewMetadata':
    case 'saveMetadata':
    case 'removeArticleCoverPage':
    //
    // Citation Editing
    //
    case 'submissionCitations':
        define('HANDLER_CLASS', \App\Pages\Copyeditor\SubmissionCopyeditHandler::class);
        
        break;
    //
    // Submission Comments
    //
    case 'viewLayoutComments':
    case 'postLayoutComment':
    case 'viewCopyeditComments':
    case 'postCopyeditComment':
    case 'editComment':
    case 'saveComment':
    case 'deleteComment':
        define('HANDLER_CLASS', \App\Pages\Copyeditor\SubmissionCommentsHandler::class);
        
        break;
    case 'index':
    case 'instructions':
        define('HANDLER_CLASS', \App\Pages\Copyeditor\CopyeditorHandler::class);
        
}
