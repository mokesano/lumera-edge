<?php
declare(strict_types=1);

namespace Lumera\Modules\Xml;

/**
 * @file core/Modules/xml/CoreXMLParserHandler.php
 *
 * Copyright (c) 2013-2025 Lumera Edge Project
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @class CoreXMLParserHandler
 * @ingroup xml
 *
 * @brief Interface for handler class used by XMLParser.
 * All XML parser handler classes must implement these methods.
 */
class CoreXMLParserHandler {

    /**
     * Callback function to act as the start element handler.
     */
    public function startElement($parser, $tag, $attributes) {
        // WIZDAM FIX: Removed reference from $parser
    }

    /**
     * Callback function to act as the end element handler.
     */
    public function endElement($parser, $tag) {
        // WIZDAM FIX: Removed reference from $parser
    }

    /**
     * Callback function to act as the character data handler.
     */
    public function characterData($parser, $data) {
        // WIZDAM FIX: Removed reference from $parser
    }

    /**
     * Returns a resulting data structure representing the parsed content.
     * The format of this object is specific to the handler.
     * @return mixed
     */
    public function getResult() {
        return null;
    }
}
