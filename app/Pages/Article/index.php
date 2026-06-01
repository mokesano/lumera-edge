<?php
declare(strict_types=1);

namespace App\Pages\Article;

/**
 * @defgroup pages_article
 */

/**
 * @file pages/article/index.php
 *
 * Copyright (c) 2013-2019 Sangia Publishing House
 * Copyright (c) 2003-2019 Rochmady and Wizdam Team
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @ingroup pages_article
 * @brief Handle requests for article functions.
 *
 */

switch ($op) {
    case 'view':
    case 'viewPDFInterstitial':
    case 'viewDownloadInterstitial':
    case 'viewArticle':
    case 'viewRST':
    case 'viewFile':
    case 'download':
    case 'downloadSuppFile':
        define('HANDLER_CLASS', \App\Pages\Article\ArticleHandler::class);
        import('app.Pages.Article.ArticleHandler');
        break;
}
