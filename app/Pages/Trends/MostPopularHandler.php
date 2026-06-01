<?php
declare(strict_types=1);

namespace App\Pages\Trends;

/**
 * @file app/Pages/Trends/MostPopularHandler.php
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2017-2026 Rochmady
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * [WIZDAM] - Standalone Handler for Most Popular Module.
 * URL Target: /{context}/trends/popular ATAU /index/trends/popular
 */

import('app.Domain.Handler.Handler');

class MostPopularHandler extends Handler {

    /**
     * Constructor
     */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Authorize the request
     * @param Request $request
     * @param array $args
     * @param array $roleAssignments
     * @return bool
     */
    public function authorize($request, $args, $roleAssignments) {
        import('core.Modules.security.authorization.ContextRequiredPolicy');
        // Set context required false, agar bisa diakses di site level maupun journal level
        $this->addPolicy(new ContextRequiredPolicy($request, 'user.authorization.noContext', false));
        return parent::authorize($request, $args, $roleAssignments);
    }

    /**
     * Display the most popular items. Nama method WAJIB "popular" sesuai parameter $op
     * @param array $args
     * @param CoreRequest $request
     * @return void
     */
    public function popular(array $args, CoreRequest $request) {
        $this->setupTemplate($request);
        $templateMgr = TemplateManager::getManager($request);
        $journal = $request->getJournal();

        // Validasi opsional jika berada di dalam jurnal
        if ($journal) {
            $this->addCheck(new HandlerValidatorJournal($this));
        }

        // [WIZDAM] Eksekusi WIZDAM Trends Manager
        import('lib.wizdam.trends.WizdamTrendsManager');
        WizdamTrendsManager::assignMostPopularPayload($templateMgr, $journal, $request);

        // Path ke template yang menyatukan header/footer WIZDAM dan most_popular.tpl
        return $templateMgr->display('trends/most_popular.tpl');
    }
}
?>