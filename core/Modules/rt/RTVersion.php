<?php
declare(strict_types=1);

/**
 * @file core/Modules/RT/RTVersion.php
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @class RTVersion
 * @ingroup rt
 * @see RT
 *
 * @brief Data structures associated with the Reading Tools component.
 */

/**
 * RT Version entity.
 */
class RTVersion {

    /** @var int|null unique identifier */
    public $versionId;

    /** @var string key */
    public $key;

    /** @var string locale key */
    public $locale;

    /** @var string version title */
    public $title;

    /** @var string version description */
    public $description;

    /** @var array RTContext version contexts */
    public $contexts = array();


    /**
     * Add an RT Context to this version.
     * @param $context RTContext
     */
    public function addContext($context) {
        array_push($this->contexts, $context);
    }

    /**
     * Get contexts.
     * @return array
     */
    public function getContexts() {
        return $this->contexts;
    }

    /**
     * Set contexts.
     * @param $contexts array
     */
    public function setContexts($contexts) {
        $this->contexts = $contexts;
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
     * Set Locale.
     * @param $locale string
     */
    public function setLocale($locale) {
        $this->locale = $locale;
    }

    /**
     * Get Locale.
     * @return string
     */
    public function getLocale() {
        return $this->locale;
    }

    /**
     * Set Key.
     * @param $key string
     */
    public function setKey($key) {
        $this->key = $key;
    }

    /**
     * Get Key.
     * @return string
     */
    public function getKey() {
        return $this->key;
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
}
?>