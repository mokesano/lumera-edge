<?php
declare(strict_types=1);

Lumera\Pages\Reviewer\SubmissionReviewHandler;
Lumera\Pages\Reviewer\SubmissionCommentsHandler;
Lumera\Pages\Reviewer\ReviewerHandler;
namespace App\Pages\Reviewer;

/**
 * @defgroup pages_reviewer
 */

/**
 * @file pages/reviewer/index.php
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @ingroup pages_reviewer
 * @brief Handle requests for reviewer functions.
 *
 */

switch ($op) {
    //
    // Submission Tracking
    //
    case 'submission':
    case 'confirmReview':
    case 'saveCompetingInterests':
    case 'recordRecommendation':
    case 'viewMetadata':
    case 'uploadReviewerVersion':
    case 'deleteReviewerVersion':
    //
    // Misc.
    //
    case 'downloadFile':
    //
    // Submission Review Form
    //
    case 'editReviewFormResponse':
    case 'saveReviewFormResponse':
        define('HANDLER_CLASS', \App\Pages\Reviewer\SubmissionReviewHandler::class);
        
        break;
    //
    // Submission Comments
    //
    case 'viewPeerReviewComments':
    case 'postPeerReviewComment':
    case 'editComment':
    case 'saveComment':
    case 'deleteComment':
        define('HANDLER_CLASS', \App\Pages\Reviewer\SubmissionCommentsHandler::class);
        
        break;
    case 'index':
        define('HANDLER_CLASS', \App\Pages\Reviewer\ReviewerHandler::class);
        
        break;
}
