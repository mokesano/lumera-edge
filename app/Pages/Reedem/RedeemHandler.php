<?php
declare(strict_types=1);

namespace App\Pages\Reedem;

/**
 * @file app/Pages/Reedem/RedeemHandler.php
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2017-2026 Rochmady
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 * 
 * @class RedeemHandler
 * @ingroup pages_redeem
 *
 * @brief Menangani domain Loyalti (Dompet Virtual). Tempat Editor/Reviewer 
 * melihat saldo "Recognition Points" dan riwayat mutasinya.
 */

import('app.Domain.Handler.Handler');
import('core.Modules.checkout.services.RedeemService');

class RedeemHandler extends Handler {
    
    /** @var RedeemService Layanan untuk mengelola logika bisnis penukaran poin */
    private RedeemService $redeemService;

    /**
     * Constructor
     */
    public function __construct() {
        parent::__construct();
        
        $this->addCheck(new HandlerValidatorCustom($this, true, null, null, function() {
            return Validation::isLoggedIn();
        }));

        $this->redeemService = new RedeemService();
    }

    /**
     * Sets up the template for the redeem handler.
     * @param CoreRequest|null $request
     */
    public function setupTemplate($request = null): void {
        parent::setupTemplate($request);
        AppLocale::requireComponents(
            LOCALE_COMPONENT_APP_COMMON, 
            LOCALE_COMPONENT_CORE_USER
        );
    }

    /**
     * Menampilkan Dasbor Dompet Virtual (Saldo & Riwayat Mutasi).
     * Rute: GET /redeem
     * @param array $args
     * @param CoreRequest|null $request
     * @return void
     */
    public function index(array $args = [], $request = null): void {
        $this->validate();
        if (!$request) $request = Application::get()->getRequest();
        
        $this->setupTemplate($request);
        $user = $request->getUser();

        // Mengambil data dari layanan loyalti
        $balance = $this->redeemService->getUserBalance((int) $user->getId());
        $history = $this->redeemService->getUserHistory((int) $user->getId());

        $templateMgr = TemplateManager::getManager($request);
        $templateMgr->assign([
            'pointBalance' => $balance,
            'pointHistory' => $history,
            'pageTitle' => 'redeem.walletDashboard',
            'pageHierarchy' => [
                [$request->url(null, 'user'), 'navigation.user']
            ]
        ]);

        $templateMgr->display('redeem/index.tpl');
    }

    /**
     * Memproses permintaan penukaran poin (POST).
     * Rute: POST /redeem/exchange
     * @param array $args
     * @param CoreRequest|null $request
     * @return void
     */
    public function exchange(array $args = [], $request = null): void {
        $this->validate();
        if (!$request) $request = Application::get()->getRequest();

        if (!$request->isPost()) {
            $this->_redirectWithError($request, 'redeem.error.invalidMethod');
        }

        import('core.Modules.validation.ValidatorCSRF');
        if (!ValidatorCSRF::checkToken($request->getUserVar('csrfToken'))) {
            $this->_redirectWithError($request, 'redeem.error.csrfInvalid');
        }

        $user = $request->getUser();
        $pointsToRedeem = (int) $request->getUserVar('points_to_redeem');

        if ($pointsToRedeem <= 0) {
            $this->_redirectWithError($request, 'redeem.error.invalidPointAmount');
        }

        try {
            // Eksekusi penukaran di Service
            $this->redeemService->exchangePoints((int) $user->getId(), $pointsToRedeem);

            // Jika berhasil, beri notifikasi trivial sukses
            import('app.Domain.Notification.NotificationManager');
            $notificationManager = new NotificationManager();
            $notificationManager->createTrivialNotification(
                $user->getId(), 
                NOTIFICATION_TYPE_SUCCESS, 
                ['contents' => __('redeem.success.pointsExchanged')]
            );

            $request->redirect(null, 'redeem', 'index');

        } catch (\Exception $e) {
            // Menangkap exception dari service (misal: "Insufficient balance")
            // Tanpa mengekspos pesan teknis langsung ke user, gunakan locale key
            if ($e->getMessage() === 'Insufficient balance.') {
                $this->_redirectWithError($request, 'redeem.error.insufficientPoints');
            } else {
                $this->_redirectWithError($request, 'redeem.error.exchangeFailed');
            }
        }
    }

    /**
     * HELPER: Mengalihkan pengguna kembali ke dasbor dompet dengan Notifikasi Error.
     * @param CoreRequest $request
     * @param string $localeKey Kunci locale untuk pesan error yang akan ditampilkan
     * @return void
     */
    private function _redirectWithError($request, string $localeKey): void {
        import('app.Domain.Notification.NotificationManager');
        $notificationManager = new NotificationManager();
        $user = $request->getUser();
        
        if ($user) {
            $notificationManager->createTrivialNotification(
                $user->getId(),
                NOTIFICATION_TYPE_ERROR,
                ['contents' => __($localeKey)]
            );
        }
        
        $request->redirect(null, 'redeem', 'index');
        exit;
    }
}
?>