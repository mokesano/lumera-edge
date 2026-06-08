<?php
declare(strict_types=1);

Lumera\Modules\Plugins\CitationParser\Regex\CoreRegexCitationParserPlugin;
/**
 * @defgroup plugins_citationParser_regex
 */

/**
 * @file plugins/citationParser/regex/RegexCitationParserPlugin.inc.php
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @class RegexCitationParserPlugin
 * @ingroup plugins_citationParser_regex
 *
 * @brief Regular extraction based citation extraction plug-in.
 */

class RegexCitationParserPlugin extends CoreRegexCitationParserPlugin {
    
	/**
	 * Constructor
	 */
    function __construct() {
        parent::__construct();
    }
}

?>