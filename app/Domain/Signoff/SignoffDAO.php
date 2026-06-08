<?php
declare(strict_types=1);

Lumera\Domain\Signoff\CoreSignoffDAO;
namespace App\Domain\Signoff;

/**
 * @file app/Domain/Signoff/SignoffDAO.php
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @class SignoffDAO
 * @ingroup signoff
 * @see Signoff
 *
 * @brief Operations for retrieving and modifying Signoff objects.
 */

class SignoffDAO extends CoreSignoffDAO {
    
    /**
     * Constructor
     */
    public function __construct() {
        parent::__construct();
    }

    /**
     * [SHIM] Backward Compatibility
     */
    public function SignoffDAO() {
        if (Config::getVar('debug', 'deprecation_warnings')) {
            trigger_error('Class ' . get_class($this) . ' uses deprecated constructor parent::SignoffDAO(). Please refactor to parent::__construct().', E_USER_DEPRECATED);
        }
        self::__construct();
    }
}

?>