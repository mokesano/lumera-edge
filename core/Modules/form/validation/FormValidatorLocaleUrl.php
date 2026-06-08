<?php
declare(strict_types=1);

Lumera\Modules\Form\Validation\FormValidatorLocale;
Lumera\Modules\Validation\ValidatorUrl;
namespace Lumera\Modules\form\validation;

/**
 * @file core.Modules.form/validation/FormValidatorLocaleUrl.inc.php
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @class FormValidatorLocaleUrl
 * @ingroup form_validation
 * @see FormValidatorLocale
 *
 * @brief Form validation check for URL addresses.
 * [WIZDAM EDITION] Refactored for PHP 8.x
 */

class FormValidatorLocaleUrl extends FormValidatorLocale {
    
    /**
     * Constructor.
     * @param Form $form the associated form
     * @param string $field the name of the associated field
     * @param string $type the type of check, either "required" or "optional"
     * @param string $message the error message for validation failures (i18n key)
     * @param string|null $requiredLocale The symbolic name of the required locale
     */
    public function __construct($form, $field, $type, $message, $requiredLocale = null) {
        $validator = new ValidatorUrl();
        parent::__construct($form, $field, $type, $message, $requiredLocale, $validator);
    }

    /**
     * [SHIM] Backward Compatibility
     */
    public function FormValidatorLocaleUrl($form, $field, $type, $message, $requiredLocale = null) {
        if (Config::getVar('debug', 'deprecation_warnings')) {
            trigger_error(
                "Class '" . get_class($this) . "' uses deprecated constructor. Please refactor to parent::__construct().", 
                E_USER_DEPRECATED
            );
        }
        self::__construct($form, $field, $type, $message, $requiredLocale);
    }
}

?>