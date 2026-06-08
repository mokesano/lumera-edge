<?php
declare(strict_types=1);

namespace Lumera\Plugins\Oaimetadataformats\dc;

/**
 * @file plugins/oaiMetadataFormats/dc/OAIMetadataFormatPlugin_DC.inc.php
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @class OAIMetadataFormatPlugin_DC
 * @ingroup oai_format
 * @see OAI
 *
 * @brief dc metadata format plugin for OAI.
 */

import('core.Modules.plugins.oaiMetadataFormats.dc.CoreOAIMetadataFormatPlugin_DC');

class OAIMetadataFormatPlugin_DC extends CoreOAIMetadataFormatPlugin_DC {
    
    /**
     * Constructor
     */
    public function __construct() {
        parent::__construct();
    }

    /**
     * [SHIM] Backward Compatibility
     */
    public function OAIMetadataFormatPlugin_DC() {
        if (Config::getVar('debug', 'deprecation_warnings')) {
            trigger_error(
                "Class '" . get_class($this) . "' uses deprecated constructor " . get_class($this) . "(). Please refactor to use __construct().",
                E_USER_DEPRECATED
            );
        }
        $args = func_get_args();
        call_user_func_array(array($this, '__construct'), $args);
    }
}

?>