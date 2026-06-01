<?php
declare(strict_types=1);

namespace App\Pages\Comment;

/**
 * @defgroup pages_comment
 */

/**
 * @file pages/comment/index.php
 *
 * Copyright (c) 2013-2019 Sangia Publishing House
 * Copyright (c) 2003-2019 Rochmady and Wizdam Team
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @ingroup pages_comment
 * @brief Handle requests for comment functions.
 *
 */

switch ($op) {
    case 'view':
    case 'add':
    case 'delete':
        define('HANDLER_CLASS', \App\Pages\Comment\CommentHandler::class);
        import('app.Pages.Comment.CommentHandler');
        break;
}
