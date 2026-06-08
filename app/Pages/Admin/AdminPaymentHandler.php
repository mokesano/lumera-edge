<?php
declare(strict_types=1);

Lumera\Domain\Handler\Handler;
Lumera\Domain\Payment\Form\PaymentSettingsForm;
namespace App\Pages\Admin;

/**
 * @file app/Pages/Admin/AdminPaymentHandler.php
 *
 * Copyright (c) 2013-2025 Lumera Edge Project
 * Copyright (c) 2003-2025 Rochmady and Wizdam Team
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 * 
 * @class AdminPaymentHandler
 * @ingroup pages_admin
 * 
 * @brief Handler khusus untuk Site Administrator mengelola Payment Gateway.
 */

class AdminPaymentHandler extends Handler {

    /**
     * Constructor
     */
    public function __construct() {
        parent::__construct();
        
        // Kunci pintu rapat-rapat: HANYA Site Admin yang boleh masuk
        $this->addCheck(new HandlerValidatorCustom($this, true, null, null, function() {
            return Validation::isLoggedIn() && Validation::isSiteAdmin();
        }));
    }

    /**
     * Memuat dependensi antarmuka dan Locale
     */
    public function setupTemplate($request = null): void {
        parent::setupTemplate($request);
        // Pastikan komponen bahasa dimuat (sesuaikan LOCALE_COMPONENT) 
        // Jika Wizdam Frontedge memiliki custom dictionary)
        AppLocale::requireComponents(
            array(
                LOCALE_COMPONENT_CORE_COMMON, 
                LOCALE_COMPONENT_CORE_USER, 
                LOCALE_COMPONENT_APPLICATION_COMMON, 
                LOCALE_COMPONENT_APP_PAYMENT
            )
        );
    }

    /**
     * Menampilkan halaman Form Pengaturan Payment Gateway
     * @param array $args
     * @param Request|null $request
     */
    public function paymentSettings(array $args = [], $request = null): void {
        $this->validate();
        $this->setupTemplate();

        if (!$request) $request = Application::get()->getRequest();

        
        $settingsForm = new PaymentSettingsForm();
        $settingsForm->initData();

        $templateMgr = TemplateManager::getManager($request);
        $templateMgr->assign('pageTitle', 'Wizdam Payment Gateway Settings');
        
        $settingsForm->display();
    }

    /**
     * Memproses penyimpanan form
     * @param array $args
     * @param Request|null $request
     */
    public function savePaymentSettings(array $args = [], $request = null): void {
        $this->validate();
        $this->setupTemplate();

        if (!$request) $request = Application::get()->getRequest();

        
        $settingsForm = new PaymentSettingsForm();
        $settingsForm->readInputData();

        if ($settingsForm->validate()) {
            $settingsForm->execute();
            
            $request->redirect(null, 'admin', 'payment-settings', null, ['saved' => 1]);
        } else {
            // Jika ada error (misal CSRF gagal), tampilkan ulang formnya
            $settingsForm->display();
        }
    }
}
?>