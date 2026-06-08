<?php
declare(strict_types=1);

Lumera\Modules\Controllers\Grid\GridRow;
Lumera\Modules\Controllers\Grid\GridCategoryRowCellProvider;
namespace Lumera\Modules\Controllers\Grid;

/**
 * @file core.Modules.controllers/grid/GridCategoryRow.inc.php
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @class GridCategoryRow
 * @ingroup controllers_grid
 *
 * @brief Class defining basic operations for handling the category row in a grid
 * [WIZDAM EDITION] Refactored for PHP 8.x Strict Standards.
 */

class GridCategoryRow extends GridRow {
    /** @var string empty row locale key */
    protected string $emptyCategoryRowText = 'grid.noItems';

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct();

        // Set a default cell provider that will get the cell template
        // variables from the category grid row.
        $this->setCellProvider(new GridCategoryRowCellProvider());
    }

    /**
     * [SHIM] Backward Compatibility
     */
    public function GridCategoryRow() {
        if (Config::getVar('debug', 'deprecation_warnings')) {
            trigger_error(
                "Class '" . get_class($this) . "' uses deprecated constructor parent::'" . get_class($this) . "'. Please refactor to parent::__construct().", 
                E_USER_DEPRECATED
            );
        }
        self::__construct();
    }

    //
    // Getters/Setters
    //
    
    /**
     * Get the no items locale key
     * @return string
     */
    public function getEmptyCategoryRowText(): string {
        return $this->emptyCategoryRowText;
    }

    /**
     * Set the no items locale key
     * @param string $emptyCategoryRowText
     */
    public function setEmptyCategoryRowText($emptyCategoryRowText) {
        $this->emptyCategoryRowText = $emptyCategoryRowText;
    }

    /**
     * Category rows only have one cell and one label.  This is it.
     * @return string
     */
    public function getCategoryLabel(): string {
        return '';
    }
}

?>