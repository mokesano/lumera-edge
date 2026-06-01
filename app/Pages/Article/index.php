<?php
declare(strict_types=1);

namespace App\Pages\Article;

/**
 * @defgroup pages_article
 */

/**
 * @file pages/article/index.php
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
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
