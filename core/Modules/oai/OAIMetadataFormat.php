<?php
declare(strict_types=1);

/**
 * @file core/Modules/oai/OAIMetadataFormat.php
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @class OAIMetadataFormat
 * @ingroup oai
 * @see OAI
 *
 * @brief Data structures associated with the OAI request handler.
 */

/**
 * OAI metadata format.
 * Used to generated metadata XML according to a specified schema.
 */
class OAIMetadataFormat {

    /** @var string metadata prefix */
    public $prefix;

    /** @var string XML schema */
    public $schema;

    /** @var string XML namespace */
    public $namespace;

    /**
     * Constructor.
     */
    public function __construct($prefix, $schema, $namespace) {
        $this->prefix = $prefix;
        $this->schema = $schema;
        $this->namespace = $namespace;
    }

    /**
     * [SHIM] Backward Compatibility
     */
    public function OAIMetadataFormat($prefix, $schema, $namespace) {
        trigger_error(
            "Class '" . get_class($this) . "' uses deprecated constructor parent::OAIMetadataFormat(). Please refactor to use parent::__construct().",
            E_USER_DEPRECATED
        );
        self::__construct($prefix, $schema, $namespace);
    }

    /**
     * Get localized data for a specific locale.
     * @param $data array
     * @param $locale string
     * @return string
     */
    public function getLocalizedData($data, $locale) {
        foreach ($data as $element) {
            if (isset($data[$locale])) return $data[$locale];
        }
        return '';
    }

    /**
     * Retrieve XML-formatted metadata for the specified record.
     * @param $record OAIRecord
     * @param $format string OAI metadata prefix
     * @return string
     */
    public function toXml($record, $format = null) {
        return '';
    }

    /**
     * Recursively strip HTML from a (multidimensional) array.
     * @param $values array
     * @return array the cleansed array
     */
    public function stripAssocArray($values) {
        // Asumsi: Fungsi global stripAssocArray tersedia di Wizdam library
        return stripAssocArray($values);
    }
}
?>