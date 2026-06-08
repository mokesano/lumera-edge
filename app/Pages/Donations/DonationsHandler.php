<?php
declare(strict_types=1);

Lumera\Domain\Handler\Handler;
Lumera\Domain\Payment\AppPaymentManager;
namespace App\Pages\Donations;

/**
 * @defgroup donations
 */
 
/**
 * @file app/Pages/Donations/DonationsHandler.php
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @class DonationsHandler
 * @ingroup donations
 *
 * @brief Display a form for accepting donations.
 */

class DonationsHandler extends Handler {
    
    /**
     * Constructor
     */
    public function __construct() {
        parent::__construct();
    }

    /**
     * [SHIM] Backward Compatibility
     */
    public function DonationsHandler() {
        if (Config::getVar('debug', 'deprecation_warnings')) {
            trigger_error(
                "Class '" . get_class($this) . "' uses deprecated constructor parent::DonationsHandler(). Please refactor to use parent::__construct().",
                E_USER_DEPRECATED
            );
        }
        $args = func_get_args();
        call_user_func_array([$this, '__construct'], $args);
    }

    /**
     * Display the donations page.
     * @param array $args
     * @param CoreRequest $request
     */
    public function index($args = [], $request = null) {
        // [WIZDAM] Singleton Fallback 
        // Menggantikan kebutuhan manual "$request = $this->getRequest()"
        if (!$request) $request = Application::get()->getRequest();
        
        $this->setupTemplate();
        // Jika args kosong, coba ambil dari request
        if (empty($args)) {
            $args = $request->getRequestedArgs();
        }
    
        
        $paymentManager = new AppPaymentManager($request);
        $journal = $request->getJournal();

        if (!Validation::isLoggedIn()) {
            Validation::redirectLogin('payment.loginRequired.forDonation');
        }

        $user = $request->getUser();

        // [WIZDAM] Cast IDs to int
        $queuedPayment = $paymentManager->createQueuedPayment(
            (int) $journal->getId(), 
            PAYMENT_TYPE_DONATION, 
            (int) $user->getId(), 
            0, 
            0
        );
        $queuedPaymentId = $paymentManager->queuePayment($queuedPayment);
    
        $paymentManager->displayPaymentForm($queuedPaymentId, $queuedPayment);
    }

    /**
     * Display a "thank you" page.
     * @param array $args
     * @param CoreRequest $request
     */
    public function thankYou($args, $request = null) {
        // [WIZDAM] Singleton Fallback
        if (!$request) $request = Application::get()->getRequest();

        $templateMgr = TemplateManager::getManager();
        $this->setupTemplate();
        $journal = $request->getJournal();
        
        $templateMgr->assign([
            'currentUrl' => $request->url(null, null, 'donations'),
            'pageTitle' => 'donations.thankYou',
            'journalName' => $journal->getLocalizedTitle(),
            'message' => 'donations.thankYouMessage'
        ]);
        $templateMgr->display('common/message.tpl');
    }
}

?>