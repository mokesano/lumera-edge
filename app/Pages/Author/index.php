<?php
declare(strict_types=1);

namespace App\Pages\Author;

/**
 * @defgroup pages_author
 */

/**
 * @file pages/author/index.php
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @ingroup pages_author
 * @brief Handle requests for journal author functions.
 *
 */

switch ($op) {
    //
    // Article Submission
    //
    case 'submit':
    case 'saveSubmit':
    case 'submitSuppFile':
    case 'saveSubmitSuppFile':
    case 'deleteSubmitSuppFile':
    case 'expediteSubmission':
        define('HANDLER_CLASS', \App\Pages\Author\SubmitHandler::class);
        import('app.Pages.Author.SubmitHandler');
        break;
    //
    // Submission Tracking
    //
    case 'deleteArticleFile':
    case 'deleteSubmission':
    case 'submission':
    case 'editSuppFile':
    case 'setSuppFileVisibility':
    case 'saveSuppFile':
    case 'addSuppFile':
    case 'submissionReview':
    case 'submissionEditing':
    case 'uploadRevisedVersion':
    case 'viewMetadata':
    case 'saveMetadata':
    case 'removeArticleCoverPage':
    case 'uploadCopyeditVersion':
    case 'completeAuthorCopyedit':
    //
    // Misc.
    //
    case 'downloadFile':
    case 'viewFile':
    case 'download':
    //
    // Proofreading Actions
    //
    case 'authorProofreadingComplete':
    case 'proofGalley':
    case 'proofGalleyTop':
    case 'proofGalleyFile':
    //
    // Payment Actions
    //
    case 'paySubmissionFee':
    case 'payFastTrackFee':
    case 'payPublicationFee':
        define('HANDLER_CLASS', \App\Pages\Author\TrackSubmissionHandler::class);
        import('app.Pages.Author.TrackSubmissionHandler');
        break;
    //
    // Submission Comments
    //
    case 'viewEditorDecisionComments':
    case 'viewCopyeditComments':
    case 'postCopyeditComment':
    case 'emailEditorDecisionComment':
    case 'viewProofreadComments':
    case 'viewLayoutComments':
    case 'postLayoutComment':
    case 'postProofreadComment':
    case 'editComment':
    case 'saveComment':
    case 'deleteComment':
        define('HANDLER_CLASS', \App\Pages\Author\SubmissionCommentsHandler::class);
        import('app.Pages.Author.SubmissionCommentsHandler');
        break;
    case 'index':
    case 'instructions':
        define('HANDLER_CLASS', \App\Pages\Author\AuthorHandler::class);
        import('app.Pages.Author.AuthorHandler');
        break;
}
