<?php
declare(strict_types=1);

Lumera\Modules\Form\Validation\FormValidator;
Lumera\Modules\Validation\ValidatorISSN;
namespace Lumera\Modules\Form\Validation;

/**
 * @file core.Modules.form/validation/FormValidatorISSN.inc.php
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @class FormValidatorISSN
 * @ingroup form_validation
 *
 * @brief Form validation check for ISSNs.
 * [WIZDAM EDITION] Refactored for PHP 8.x
 */

class FormValidatorISSN extends FormValidator {
    
    /**
     * Constructor.
     * @param Form $form the associated form
     * @param string $field the name of the associated field
     * @param string $type the type of check, either "required" or "optional"
     * @param string $message the error message for validation failures (i18n key)
     */
    public function __construct($form, $field, $type, $message) {
        
        $validator = new ValidatorISSN();
        parent::__construct($form, $field, $type, $message, $validator);
    }

    /**
     * [SHIM] Backward Compatibility
     */
    public function FormValidatorISSN($form, $field, $type, $message) {
        if (Config::getVar('debug', 'deprecation_warnings')) {
            trigger_error(
                "Class '" . get_class($this) . "' uses deprecated constructor. Please refactor to parent::__construct().", 
                E_USER_DEPRECATED
            );
        }
        self::__construct($form, $field, $type, $message);
    }
}

?>