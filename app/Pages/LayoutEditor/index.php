<?php
declare(strict_types=1);

Lumera\Pages\Editor\IssueManagementHandler;
Lumera\Pages\LayoutEditor\SubmissionLayoutHandler;
Lumera\Pages\LayoutEditor\SubmissionCommentsHandler;
Lumera\Pages\LayoutEditor\LayoutEditorHandler;
namespace App\Pages\LayoutEditor;

/**
 * @defgroup pages_layoutEditor
 */

/**
 * @file pages/layoutEditor/index.php
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @ingroup pages_layoutEditor
 * @brief Handle requests for layout editor functions.
 *
 */

switch ($op) {
    //
    // issue
    //
    case 'issueData':
    case 'issueToc':
    case 'resetSectionOrder':
    case 'updateIssueToc':
    case 'moveSectionToc':
    case 'moveArticleToc':
    case 'editIssue':
    case 'removeCoverPage':
    case 'removeStyleFile':
        define('HANDLER_CLASS', \App\Pages\Editor\IssueManagementHandler::class);
        
        break;
    case 'viewMetadata':
    //
    // Submission Layout Editing
    //
    case 'submission':
    case 'submissionEditing':
    case 'completeAssignment':
    case 'uploadLayoutFile':
    case 'editGalley':
    case 'saveGalley':
    case 'deleteGalley':
    case 'orderGalley':
    case 'proofGalley':
    case 'proofGalleyTop':
    case 'proofGalleyFile':
    case 'editSuppFile':
    case 'saveSuppFile':
    case 'deleteSuppFile':
    case 'orderSuppFile':
    case 'downloadFile':
    case 'viewFile':
    case 'downloadLayoutTemplate':
    case 'deleteArticleImage':
    //
    // Proofreading Actions
    //
    case 'layoutEditorProofreadingComplete':
        define('HANDLER_CLASS', \App\Pages\LayoutEditor\SubmissionLayoutHandler::class);
        
        break;
    //
    // Submission Comments
    //
    case 'viewLayoutComments':
    case 'postLayoutComment':
    case 'viewProofreadComments':
    case 'postProofreadComment':
    case 'editComment':
    case 'saveComment':
    case 'deleteComment':
        define('HANDLER_CLASS', \App\Pages\LayoutEditor\SubmissionCommentsHandler::class);
        
        break;
    case 'index':
    case 'submissions':
    case 'futureIssues':
    case 'backIssues':
    case 'instructions':
    case 'completeProofreader':
        define('HANDLER_CLASS', \App\Pages\LayoutEditor\LayoutEditorHandler::class);
        
        break;
}
