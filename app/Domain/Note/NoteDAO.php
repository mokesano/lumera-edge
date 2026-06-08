<?php
declare(strict_types=1);

Lumera\Domain\Note\CoreNoteDAO;
Lumera\Domain\Note\Note;
namespace App\Domain\Note;

/**
 * @file app/Domain/Note/NoteDAO.php
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @class NoteDAO
 * @ingroup note
 * @see CoreNoteDAO
 *
 * @brief Wizdam extension of CoreNoteDAO
 *
 * [WIZDAM EDITION] Refactored for PHP 8.1+ Strict Compliance
 */

class NoteDAO extends CoreNoteDAO {
    /** @var ArticleFileDAO */
    public $articleFileDao;

    /**
     * Constructor
     */
    public function __construct() {
        $this->articleFileDao = DAORegistry::getDAO('ArticleFileDAO');
        parent::__construct();
    }

    /**
     * [SHIM] Backward Compatibility
     */
    public function NoteDAO() {
        if (Config::getVar('debug', 'deprecation_warnings')) {
            trigger_error(
                "Class '" . get_class($this) . "' uses deprecated constructor parent::NoteDAO(). Please refactor to use parent::__construct().",
                E_USER_DEPRECATED
            );
        }
        self::__construct();
    }

    /**
     * Construct a new data object corresponding to this DAO.
     * @return Note
     */
    public function newDataObject() {
        return new Note();
    }

    /**
     * Return a Note object from a row.
     * @param array $row
     * @return Note
     */
    public function _returnNoteFromRow($row) {
        $note = parent::_returnNoteFromRow($row);

        if ($fileId = $note->getFileId()) {
            $file = $this->articleFileDao->getArticleFile($fileId);
            $note->setFile($file);
        }

        return $note;
    }
}
?>