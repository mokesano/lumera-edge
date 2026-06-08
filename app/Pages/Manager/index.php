<?php
declare(strict_types=1);

Lumera\Pages\Manager\SetupHandler;
Lumera\Pages\Manager\PeopleHandler;
Lumera\Pages\Manager\SectionHandler;
Lumera\Pages\Manager\ReviewFormHandler;
Lumera\Pages\Manager\EmailHandler;
Lumera\Pages\Manager\JournalLanguagesHandler;
Lumera\Pages\Manager\FilesHandler;
Lumera\Pages\Manager\SubscriptionHandler;
Lumera\Pages\Manager\ImportExportHandler;
Lumera\Pages\Manager\PluginHandler;
Lumera\Pages\Manager\PluginManagementHandler;
Lumera\Pages\Manager\GroupHandler;
Lumera\Pages\Manager\StatisticsHandler;
Lumera\Pages\Manager\ManagerPaymentHandler;
Lumera\Pages\Manager\AnnouncementHandler;
Lumera\Pages\Manager\ManagerHandler;
namespace App\Pages\Manager;

/**
 * @defgroup pages_manager
 */

/**
 * @file pages/manager/index.php
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @ingroup pages_manager
 * @brief Handle requests for journal management functions.
 *
 */

switch ($op) {
    //
    // Setup
    //
    case 'setup':
    case 'saveSetup':
    case 'setupSaved':
    case 'downloadLayoutTemplate':
    case 'resetPermissions':
        define('HANDLER_CLASS', \App\Pages\Manager\SetupHandler::class);
        
        break;
    //
    // People Management
    //
    case 'people':
    case 'showNoRole':
    case 'enrollSearch':
    case 'enroll':
    case 'unEnroll':
    case 'enrollSyncSelect':
    case 'enrollSync':
    case 'createUser':
    case 'suggestUsername':
    case 'mergeUsers':
    case 'disableUser':
    case 'enableUser':
    case 'removeUser':
    case 'editUser':
    case 'updateUser':
    case 'userProfile':
        define('HANDLER_CLASS', \App\Pages\Manager\PeopleHandler::class);
        
        break;
    //
    // Section Management
    //
    case 'sections':
    case 'createSection':
    case 'editSection':
    case 'updateSection':
    case 'deleteSection':
    case 'moveSection':
        define('HANDLER_CLASS', \App\Pages\Manager\SectionHandler::class);
        
        break;
    //
    // Review Form Management
    //
    case 'reviewForms':
    case 'createReviewForm':
    case 'editReviewForm':
    case 'updateReviewForm':
    case 'previewReviewForm':
    case 'deleteReviewForm':
    case 'activateReviewForm':
    case 'deactivateReviewForm':
    case 'copyReviewForm':
    case 'moveReviewForm':
    case 'reviewFormElements':
    case 'createReviewFormElement':
    case 'editReviewFormElement':
    case 'deleteReviewFormElement':
    case 'updateReviewFormElement':
    case 'moveReviewFormElement':
    case 'copyReviewFormElement':
        define('HANDLER_CLASS', \App\Pages\Manager\ReviewFormHandler::class);
        
        break;
    //
    // E-mail Management
    //
    case 'emails':
    case 'createEmail':
    case 'editEmail':
    case 'updateEmail':
    case 'deleteCustomEmail':
    case 'resetEmail':
    case 'exportEmails':
    case 'uploadEmails':
    case 'disableEmail':
    case 'enableEmail':
    case 'resetAllEmails':
        define('HANDLER_CLASS', \App\Pages\Manager\EmailHandler::class);
        
        break;
    //
    // Languages
    //
    case 'languages':
    case 'saveLanguageSettings':
    case 'reloadLocalizedDefaultSettings':
        define('HANDLER_CLASS', \App\Pages\Manager\JournalLanguagesHandler::class);
        
        break;
    //
    // Files Browser
    //
    case 'files':
    case 'fileUpload':
    case 'fileMakeDir':
    case 'fileDelete':
        define('HANDLER_CLASS', \App\Pages\Manager\FilesHandler::class);
        
        break;
    //
    // Subscription Policies
    //
    case 'subscriptionPolicies':
    case 'saveSubscriptionPolicies':
    //
    // Subscription Types
    //
    case 'subscriptionTypes':
    case 'deleteSubscriptionType':
    case 'createSubscriptionType':
    case 'selectSubscriber':
    case 'editSubscriptionType':
    case 'updateSubscriptionType':
    case 'moveSubscriptionType':
    //
    // Subscriptions
    //
    case 'subscriptions':
    case 'subscriptionsSummary':
    case 'deleteSubscription':
    case 'renewSubscription':
    case 'createSubscription':
    case 'editSubscription':
    case 'updateSubscription':
    case 'resetDateReminded':
        define('HANDLER_CLASS', \App\Pages\Manager\SubscriptionHandler::class);
        
        break;
    //
    // Import/Export
    //
    case 'importexport':
        define('HANDLER_CLASS', \App\Pages\Manager\ImportExportHandler::class);
        
        break;
    //
    // Plugin Management
    //
    case 'plugins':
    case 'plugin':
        define('HANDLER_CLASS', \App\Pages\Manager\PluginHandler::class);
        
        break;
    case 'managePlugins':
        define('HANDLER_CLASS', \App\Pages\Manager\PluginManagementHandler::class);
        
        break;
    //
    // Group Management
    //
    case 'groups':
    case 'createGroup':
    case 'updateGroup':
    case 'deleteGroup':
    case 'editGroup':
    case 'groupMembership':
    case 'addMembership':
    case 'deleteMembership':
    case 'setBoardEnabled':
    case 'moveGroup':
    case 'moveMembership':
        define('HANDLER_CLASS', \App\Pages\Manager\GroupHandler::class);
        
        break;
    //
    // Statistics Functions
    //
    case 'statistics':
    case 'saveStatisticsSettings':
    case 'savePublicStatisticsList':
    case 'report':
    case 'reportGenerator':
    case 'generateReport':
        define('HANDLER_CLASS', \App\Pages\Manager\StatisticsHandler::class);
        
        break;
    //
    // Payment
    //
    case 'payments':
    case 'savePaymentSettings':
    case 'payMethodSettings':
    case 'savePayMethodSettings':
    case 'viewPayments':
    case 'viewPayment':
        define('HANDLER_CLASS', \App\Pages\Manager\ManagerPaymentHandler::class);
        
        break;
    //
    //    announcements
    //
    case 'announcements':
    case 'deleteAnnouncement':
    case 'createAnnouncement':
    case 'editAnnouncement':
    case 'updateAnnouncement':
    //
    //    announcement Types
    //
    case 'announcementTypes':
    case 'deleteAnnouncementType':
    case 'createAnnouncementType':
    case 'editAnnouncementType':
    case 'updateAnnouncementType':
        define('HANDLER_CLASS', \App\Pages\Manager\AnnouncementHandler::class);
        
        break;
    case 'index':
    case 'email':
        define('HANDLER_CLASS', \App\Pages\Manager\ManagerHandler::class);
        
}
