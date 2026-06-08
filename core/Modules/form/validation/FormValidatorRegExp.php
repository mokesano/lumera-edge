<?php
declare(strict_types=1);

Lumera\Modules\Form\Validation\FormValidator;
Lumera\Modules\Validation\ValidatorRegExp;
namespace Lumera\Modules\form\validation;

/**
 * @file core.Modules.form/validation/FormValidatorRegExp.inc.php
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @class FormValidatorRegExp
 * @ingroup form_validation
 *
 * @brief Form validation check using a regular expression.
 * [WIZDAM EDITION] Refactored for PHP 8.x
 */

class FormValidatorRegExp extends FormValidator {
    
    /**
     * Constructor.
     * @param Form $form the associated form
     * @param string $field the name of the associated field
     * @param string $type the type of check, either "required" or "optional"
     * @param string $message the error message for validation failures (i18n key)
     * @param string $regExp the regular expression (PCRE form)
     */
    public function __construct($form, $field, $type, $message, $regExp) {
        
        $validator = new ValidatorRegExp($regExp);
        parent::__construct($form, $field, $type, $message, $validator);
    }

    /**
     * [SHIM] Backward Compatibility
     */
    public function FormValidatorRegExp($form, $field, $type, $message, $regExp) {
        if (Config::getVar('debug', 'deprecation_warnings')) {
            trigger_error(
                "Class '" . get_class($this) . "' uses deprecated constructor. Please refactor to parent::__construct().", 
                E_USER_DEPRECATED
            );
        }
        self::__construct($form, $field, $type, $message, $regExp);
    }
}

?>