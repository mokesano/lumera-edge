<?php
declare(strict_types=1);

Lumera\Domain\Handler\Handler;
Lumera\Modules\Security\Authorization\ContextRequiredPolicy;
namespace App\Pages\Trends;

/**
 * @file app/Pages/Trends/TrendsHandler.php
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2017-2026 Rochmady
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * [WIZDAM] - Hub/Landing Page untuk semua metrik Trends ScholarWizdam.
 * URL Target: /{context}/trends
 */

class TrendsHandler extends Handler {

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
        
        $this->addPolicy(new ContextRequiredPolicy($request, 'user.authorization.noContext', false));
        return parent::authorize($request, $args, $roleAssignments);
    }

    /**
     * Display the trends hub/landing page.
     * @param array $args
     * @param CoreRequest $request
     * @return void
     */
    public function index(array $args = [], $request = NULL) {
        $this->setupTemplate($request);
        $templateMgr = TemplateManager::getManager($request);
        $journal = $request->getJournal();

        if ($journal) {
            $this->addCheck(new HandlerValidatorJournal($this));
        }

        // Generate URL untuk masing-masing pilar trends agar tombol di Hub bisa diklik
        $templateMgr->assign([
            'hubPopularUrl'  => $request->url(null, 'trends', 'popular'),
            'hubDownloadUrl' => $request->url(null, 'trends', 'download'),
            'hubCitedUrl'    => $request->url(null, 'trends', 'cited')
        ]);

        // Tampilkan template Hub Anda
        return $templateMgr->display('trends/trends.tpl');
    }
}
?>