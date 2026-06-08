<?php
declare(strict_types=1);

namespace Lumera\Modules\Rt;

/**
 * @file core/Modules/Rt/RTContext.php
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @class RTContext
 * @ingroup rt
 * @see RT
 *
 * @brief Data structures associated with the Reading Tools component.
 */

/**
 * RT Context entity.
 */
class RTContext {

    /** @var int|null unique identifier */
    public $contextId;

    /** @var int|null unique version identifier */
    public $versionId;

    /** @var string context title */
    public $title;

    /** @var string context abbreviation */
    public $abbrev;

    /** @var string context description */
    public $description;

    /** @var bool default search terms to author names */
    public $authorTerms = false;

    /** @var bool default search terms to geo indexing data */
    public $geoTerms = false;

    /** @var bool default use as define terms context */
    public $defineTerms = false;

    /** @var bool default use as "cited by" context */
    public $citedBy = false;

    /** @var int ordering of this context within version */
    public $order = 0;

    /** @var array RTSearch context searches */
    public $searches = array();


    /**
     * Add an RT Search to this context.
     * @param $search RTSearch
     */
    public function addSearch($search) {
        array_push($this->searches, $search);
    }

    /**
     * Get searches.
     * @return array
     */
    public function getSearches() {
        return $this->searches;
    }

    /**
     * Set searches.
     * @param $searches array
     */
    public function setSearches($searches) {
        $this->searches = $searches;
    }

    /**
     * Set Context ID.
     * @param $contextId int
     */
    public function setContextId($contextId) {
        $this->contextId = $contextId;
    }

    /**
     * Get Context ID.
     * @return int|null
     */
    public function getContextId() {
        return $this->contextId;
    }

    /**
     * Set Version ID.
     * @param $versionId int
     */
    public function setVersionId($versionId) {
        $this->versionId = $versionId;
    }

    /**
     * Get Version ID.
     * @return int|null
     */
    public function getVersionId() {
        return $this->versionId;
    }

    /**
     * Set Title.
     * @param $title string
     */
    public function setTitle($title) {
        $this->title = $title;
    }

    /**
     * Get Title.
     * @return string
     */
    public function getTitle() {
        return $this->title;
    }

    /**
     * Set Abbreviation.
     * @param $abbrev string
     */
    public function setAbbrev($abbrev) {
        $this->abbrev = $abbrev;
    }

    /**
     * Get Abbreviation.
     * @return string
     */
    public function getAbbrev() {
        return $this->abbrev;
    }

    /**
     * Set Description.
     * @param $description string
     */
    public function setDescription($description) {
        $this->description = $description;
    }

    /**
     * Get Description.
     * @return string
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * Get Cited By flag.
     * @return bool
     */
    public function getCitedBy() {
        return $this->citedBy;
    }

    /**
     * Set Cited By flag.
     * @param $citedBy bool
     */
    public function setCitedBy($citedBy) {
        $this->citedBy = $citedBy;
    }

    /**
     * Get Author Terms flag.
     * @return bool
     */
    public function getAuthorTerms() {
        return $this->authorTerms;
    }

    /**
     * Set Author Terms flag.
     * @param $authorTerms bool
     */
    public function setAuthorTerms($authorTerms) {
        $this->authorTerms = $authorTerms;
    }

    /**
     * Get Geo Terms flag.
     * @return bool
     */
    public function getGeoTerms() {
        return $this->geoTerms;
    }

    /**
     * Set Geo Terms flag.
     * @param $geoTerms bool
     */
    public function setGeoTerms($geoTerms) {
        $this->geoTerms = $geoTerms;
    }

    /**
     * Get Define Terms flag.
     * @return bool
     */
    public function getDefineTerms() {
        return $this->defineTerms;
    }

    /**
     * Set Define Terms flag.
     * @param $defineTerms bool
     */
    public function setDefineTerms($defineTerms) {
        $this->defineTerms = $defineTerms;
    }

    /**
     * Get Order.
     * @return int
     */
    public function getOrder() {
        return $this->order;
    }

    /**
     * Set Order.
     * @param $order int
     */
    public function setOrder($order) {
        $this->order = $order;
    }
}
?>