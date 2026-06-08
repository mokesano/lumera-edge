<?php
declare(strict_types=1);

Lumera\Modules\Plugins\Metadata\Nlm30\Filter\Nlm30CitationSchemaCitationOutputFormatFilter;
namespace Lumera\Modules\plugins\citationOutput\vancouver\filter;

/**
 * @defgroup plugins_citationOutput_vancouver_filter
 */

/**
 * @file plugins/citationOutput/vancouver/filter/Nlm30CitationSchemaVancouverFilter.inc.php
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @class Nlm30CitationSchemaVancouverFilter
 * @ingroup plugins_citationOutput_vancouver_filter
 *
 * @brief Filter that transforms NLM citation metadata descriptions into
 * Vancouver citation output.
 *
 * [WIZDAM REFACTOR]
 * - PHP 8.1+ Strict Compliance
 * - Modern Constructor
 * - Explicit Visibility & Type Hints
 */

class Nlm30CitationSchemaVancouverFilter extends Nlm30CitationSchemaCitationOutputFormatFilter {
    
    /**
     * Constructor
     * @param FilterGroup $filterGroup
     */
    public function __construct(FilterGroup $filterGroup) {
        $this->setDisplayName('Vancouver Citation Output');

        parent::__construct($filterGroup);
    }

    //
    // Implement template methods from PersistableFilter
    //
    
    /**
     * @see PersistableFilter::getClassName()
     * @return string
     */
    public function getClassName(): string {
        return 'core.Modules.plugins.citationOutput.vancouver.filter.Nlm30CitationSchemaVancouverFilter';
    }

    //
    // Implement abstract template methods from TemplateBasedFilter
    //
    
    /**
     * @see TemplateBasedFilter::getBasePath()
     * @return string
     */
    public function getBasePath(): string {
        return dirname(__FILE__);
    }
}
?>