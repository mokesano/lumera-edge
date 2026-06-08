<?php
declare(strict_types=1);

Lumera\Modules\Form\Form;
namespace Lumera\Plugins\Generic\Sword;

/**
 * @file plugins/generic/sword/SettingsForm.inc.php
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @class SettingsForm
 * @ingroup plugins_generic_sword
 *
 * @brief Form for journal managers to modify SWORD plugin settings
 *
 * @edition Wizdam Edition (PHP 8.x Compatible)
 */

class SettingsForm extends Form {

    /** @var int */
    public $journalId;

    /** @var object */
    public $plugin;

    /**
     * Constructor
     * @param object $plugin
     * @param int $journalId
     */
    public function __construct($plugin, $journalId) {
        $this->journalId = $journalId;
        $this->plugin = $plugin;

        parent::__construct($plugin->getTemplatePath() . 'settingsForm.tpl');
        $this->addCheck(new FormValidatorPost($this));
    }

    /**
     * [SHIM] Backward Compatibility
     */
    public function SettingsForm($plugin, $journalId) {
        if (Config::getVar('debug', 'deprecation_warnings')) {
            trigger_error("Class '" . get_class($this) . "' uses deprecated constructor parent::SettingsForm(). Please refactor to parent::__construct().", E_USER_DEPRECATED);
        }
        $args = func_get_args();
        call_user_func_array(array($this, '__construct'), $args);
    }

    /**
     * Initialize form data.
     * @see Form::initData()
     */
    public function initData() {
        $journalId = $this->journalId;
        $plugin = $this->plugin;

        $this->setData('allowAuthorSpecify', $plugin->getSetting($journalId, 'allowAuthorSpecify'));
        $this->setData('depositPoints', $plugin->getSetting($journalId, 'depositPoints'));
    }

    /**
     * Assign form data to user-submitted data.
     * @see Form::readInputData()
     */
    public function readInputData() {
        $this->readUserVars(['allowAuthorSpecify']);
    }

    /**
     * Display the form.
     * @param CoreRequest $request
     * @param string $template
     */
    public function display($request = null, $template = null) {
        $templateMgr = TemplateManager::getManager();
        $templateMgr->assign('depositPointTypes', $this->plugin->getTypeMap());
        parent::display($request, $template);
    }

    /**
     * Save settings.
     * @see Form::execute()
     * @param object $object
     */
    public function execute($object = null) {
        $plugin = $this->plugin;
        $journalId = $this->journalId;

        $plugin->updateSetting($journalId, 'allowAuthorSpecify', $this->getData('allowAuthorSpecify'));
    }
}
?>