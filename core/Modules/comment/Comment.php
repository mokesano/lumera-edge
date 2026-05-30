<?php
declare(strict_types=1);

namespace App\Modules\Comment;

/**
 * @defgroup comment
 */

/**
 * @file core/Modules/Comment/Comment.php
 *
 * Copyright (c) 2013-2019 Sangia Publishing House
 * Copyright (c) 2003-2019 Rochmady and Wizdam Team
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @class Comment
 * @ingroup comment
 * @see CommentDAO
 *
 * @brief Class for public Comment associated with submission.
 */

class Comment extends DataObject {

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct();
        $this->setPosterIP(Request::getRemoteAddr());
    }

    /**
     * [SHIM] Backward Compatibility
     */
    public function Comment() {
        if (Config::getVar('debug', 'deprecation_warnings')) {
            trigger_error(
                "Class '" . get_class($this) . "' uses deprecated constructor parent::" . get_class($this) . "(). Please refactor to use parent::__construct().",
                E_USER_DEPRECATED
            );
        }
        $args = func_get_args();
        call_user_func_array([$this, '__construct'], $args);
    }

    /**
     * [DEPRECATED] Get submission comment id
     * @return int
     */
    public function getCommentId() {
        if (Config::getVar('debug', 'deprecation_warnings')) trigger_error('Deprecated function.');
        return $this->getId();
    }

    /**
     * [DEPRECATED] Set submission comment id
     * @param int $commentId
     */
    public function setCommentId($commentId) {
        if (Config::getVar('debug', 'deprecation_warnings')) trigger_error('Deprecated function.');
        return $this->setId($commentId);
    }

    /**
     * Get number of child comments
     * @return int
     */
    public function getChildCommentCount() {
        return $this->getData('childCommentCount');
    }

    /**
     * Set number of child comments
     * @param int $childCommentCount
     */
    public function setChildCommentCount($childCommentCount) {
        return $this->setData('childCommentCount', $childCommentCount);
    }

    /**
     * Get parent comment id
     * @return int
     */
    public function getParentCommentId() {
        return $this->getData('parentCommentId');
    }

    /**
     * Set parent comment id
     * @param int $parentCommentId
     */
    public function setParentCommentId($parentCommentId) {
        return $this->setData('parentCommentId', $parentCommentId);
    }

    /**
     * Get submission id
     * @return int
     */
    public function getSubmissionId() {
        return $this->getData('submissionId');
    }

    /**
     * Set submission id
     * @param int $submissionId
     */
    public function setSubmissionId($submissionId) {
        return $this->setData('submissionId', $submissionId);
    }

    /**
     * Get user object
     * @return User|null
     */
    public function getUser() {
        return $this->getData('user');
    }

    /**
     * Set user object
     * @param User $user
     */
    public function setUser($user) {
        return $this->setData('user', $user);
    }

    /**
     * Get poster name
     * @return string
     */
    public function getPosterName() {
        return $this->getData('posterName');
    }

    /**
     * Set poster name
     * @param string $posterName
     */
    public function setPosterName($posterName) {
        return $this->setData('posterName', $posterName);
    }

    /**
     * Get poster email
     * @return string
     */
    public function getPosterEmail() {
        return $this->getData('posterEmail');
    }

    /**
     * Set poster email
     * @param string $posterEmail
     */
    public function setPosterEmail($posterEmail) {
        return $this->setData('posterEmail', $posterEmail);
    }

    /**
     * Get posterIP
     * @return string
     */
    public function getPosterIP() {
        return $this->getData('posterIP');
    }

    /**
     * Set posterIP
     * @param string $posterIP
     */
    public function setPosterIP($posterIP) {
        return $this->setData('posterIP', $posterIP);
    }

    /**
     * Get title
     * @return string
     */
    public function getTitle() {
        return $this->getData('title');
    }

    /**
     * Set title
     * @param string $title
     */
    public function setTitle($title) {
        return $this->setData('title', $title);
    }

    /**
     * Get comment body
     * @return string
     */
    public function getBody() {
        return $this->getData('body');
    }

    /**
     * Set comment body
     * @param string $body
     */
    public function setBody($body) {
        return $this->setData('body', $body);
    }

    /**
     * Get date posted
     * @return string
     */
    public function getDatePosted() {
        return $this->getData('datePosted');
    }

    /**
     * Set date posted
     * @param string $datePosted
     */
    public function setDatePosted($datePosted) {
        return $this->setData('datePosted', $datePosted);
    }

    /**
     * Get date modified
     * @return string
     */
    public function getDateModified() {
        return $this->getData('dateModified');
    }

    /**
     * Set date modified
     * @param string $dateModified
     */
    public function setDateModified($dateModified) {
        return $this->setData('dateModified', $dateModified);
    }

    /**
     * Get child comments (if fetched using recursive option)
     * @return array|null
     */
    public function getChildren() {
        return $this->getData('children');
    }

    /**
     * Set child comments
     * @param array $children
     */
    public function setChildren($children) {
        $this->setData('children', $children);
    }
}
?>