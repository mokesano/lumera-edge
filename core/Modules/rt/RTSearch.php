<?php
declare(strict_types=1);

namespace Lumera\Modules\Rt;

/**
 * @file core/Modules/Rt/RTSearch.php
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @class RTSearch
 * @ingroup rt
 * @see RT
 *
 * @brief Data structures associated with the Reading Tools component.
 */

/**
 * RT Search entity.
 */
class RTSearch {

    /** @var int|null unique identifier */
    public $searchId;

    /** @var int|null unique context identifier */
    public $contextId;

    /** @var string site title */
    public $title;

    /** @var string site description */
    public $description;

    /** @var string site URL */
    public $url;

    /** @var string search URL */
    public $searchUrl;

    /** @var string search POST body */
    public $searchPost;

    /** @var int ordering of this search within context */
    public $order = 0;

    /* Getter / Setter Functions */

    /**
     * Get Search ID.
     * @return int|null
     */
    public function getSearchId() {
        return $this->searchId;
    }

    /**
     * Set Search ID.
     * @param $searchId int
     */
    public function setSearchId($searchId) {
        $this->searchId = $searchId;
    }

    /**
     * Get Context ID.
     * @return int|null
     */
    public function getContextId() {
        return $this->contextId;
    }

    /**
     * Set Context ID.
     * @param $contextId int
     */
    public function setContextId($contextId) {
        $this->contextId = $contextId;
    }

    /**
     * Get Title.
     * @return string
     */
    public function getTitle() {
        return $this->title;
    }

    /**
     * Set Title.
     * @param $title string
     */
    public function setTitle($title) {
        $this->title = $title;
    }

    /**
     * Get Description.
     * @return string
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * Set Description.
     * @param $description string
     */
    public function setDescription($description) {
        $this->description = $description;
    }

    /**
     * Get URL.
     * @return string
     */
    public function getUrl() {
        return $this->url;
    }

    /**
     * Set URL.
     * @param $url string
     */
    public function setUrl($url) {
        $this->url = $url;
    }

    /**
     * Get Search URL.
     * @return string
     */
    public function getSearchUrl() {
        return $this->searchUrl;
    }

    /**
     * Set Search URL.
     * @param $searchUrl string
     */
    public function setSearchUrl($searchUrl) {
        $this->searchUrl = $searchUrl;
    }

    /**
     * Get Search Post data.
     * @return string
     */
    public function getSearchPost() {
        return $this->searchPost;
    }

    /**
     * Set Search Post data.
     * @param $searchPost string
     */
    public function setSearchPost($searchPost) {
        $this->searchPost = $searchPost;
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