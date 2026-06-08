<?php
declare(strict_types=1);

Lumera\Pages\Proofreader\SubmissionProofreadHandler;
Lumera\Pages\Proofreader\SubmissionCommentsHandler;
Lumera\Pages\Proofreader\ProofreaderHandler;
namespace App\Pages\Proofreader;

/**
 * @defgroup pages_proofreader
 */

/**
 * @file pages/proofreader/index.php
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @ingroup pages_proofreader
 * @brief Handle requests for proofreader functions.
 *
 */

switch ($op) {
    //
    // Submission Proofreading
    //
    case 'submission':
    case 'completeProofreader':
    //
    // Misc.
    //
    case 'downloadFile':
    case 'viewFile':
    case 'proofGalley':
    case 'proofGalleyTop':
    case 'proofGalleyFile':
    case 'viewMetadata':
        define('HANDLER_CLASS', \App\Pages\Proofreader\SubmissionProofreadHandler::class);
        
        break;
    //
    // Submission Comments
    //
    case 'viewProofreadComments':
    case 'postProofreadComment':
    case 'viewLayoutComments':
    case 'postLayoutComment':
    case 'editComment':
    case 'deleteComment':
    case 'saveComment':
        define('HANDLER_CLASS', \App\Pages\Proofreader\SubmissionCommentsHandler::class);
        
        break;
    case 'index':
    case 'instructions':
        define('HANDLER_CLASS', \App\Pages\Proofreader\ProofreaderHandler::class);
        
}
