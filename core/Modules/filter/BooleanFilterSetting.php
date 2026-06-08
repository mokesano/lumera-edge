<?php
declare(strict_types=1);

Lumera\Modules\Filter\FilterSetting;
Lumera\Modules\Form\Validation\FormValidatorBoolean;
namespace Lumera\Modules\filter;

/**
 * @file core.Modules.filter/BooleanFilterSetting.inc.php
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @class BooleanFilterSetting
 * @ingroup classes_filter
 *
 * @brief Class that describes a configurable filter setting which must
 * be either true or false.
 */

class BooleanFilterSetting extends FilterSetting {
    
    /**
     * Constructor
     *
     * @param $name string
     * @param $displayName string
     * @param $validationMessage string
     */
    public function __construct($name, $displayName, $validationMessage) {
        parent::__construct($name, $displayName, $validationMessage, FORM_VALIDATOR_OPTIONAL_VALUE);
    }

    /**
     * [SHIM] Backward Compatibility
     */
    public function BooleanFilterSetting($name, $displayName, $validationMessage) {
        trigger_error(
            "Class '" . get_class($this) . "' uses deprecated constructor parent::BooleanFilterSetting(). Please refactor to use parent::__construct().",
            E_USER_DEPRECATED
        );
        self::__construct($name, $displayName, $validationMessage);
    }

    //
    // Implement abstract template methods from FilterSetting
    //
    /**
     * @see FilterSetting::getCheck()
     */
    public function getCheck($form) {
        $check = new FormValidatorBoolean($form, $this->getName(), $this->getValidationMessage());
        return $check;
    }
}
?>