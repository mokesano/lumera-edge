<?php
declare(strict_types=1);

Lumera\Modules\Security\Authorization\DataObjectRequiredPolicy;
namespace App\Domain\Security\Authorization\Internal;

/**
 * @file app/Domain/Security/Authorization/Internal/SectionEditorSubmissionRequiredPolicy.php
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @class SectionEditorSubmissionRequiredPolicy
 * @ingroup security_authorization_internal
 *
 * @brief Policy that ensures that the request contains a valid section
 * editor submission.
 * * MODERNIZED FOR WIZDAM FORK
 */

class SectionEditorSubmissionRequiredPolicy extends DataObjectRequiredPolicy {
    
    /**
     * Constructor
     * @param $request CoreRequest
     */
    public function __construct($request, $args, $submissionParameterName = 'articleId') {
        parent::__construct($request, $args, $submissionParameterName, 'user.authorization.invalidSectionEditorSubmission');
    }

    /**
     * [SHIM] Backward Compatibility
     */
    public function SectionEditorSubmissionRequiredPolicy($request, $args, $submissionParameterName = 'articleId') {
        trigger_error(
            "Class '" . get_class($this) . "' uses deprecated constructor parent::SectionEditorSubmissionRequiredPolicy(). Please refactor to use parent::__construct().",
            E_USER_DEPRECATED
        );
        self::__construct($request, $args, $submissionParameterName);
    }

    //
    // Implement template methods from AuthorizationPolicy
    //
    /**
     * @see AuthorizationPolicy::effect()
     */
    public function effect() {
        // Get the submission id.
        $submissionId = $this->getDataObjectId();
        if ($submissionId === false) return AUTHORIZATION_DENY;

        // Validate the section editor submission id.
        $sectionEditorSubmissionDao = DAORegistry::getDAO('SectionEditorSubmissionDAO');
        $sectionEditorSubmission = $sectionEditorSubmissionDao->getSectionEditorSubmission($submissionId);
        // [MODERNISASI] is_a -> instanceof
        if (!($sectionEditorSubmission instanceof SectionEditorSubmission)) return AUTHORIZATION_DENY;

        // Check whether the article is actually part of the journal
        // in the context.
        $request = $this->getRequest();
        $router = $request->getRouter();
        $journal = $router->getContext($request);
        
        // [MODERNISASI] is_a -> instanceof
        if (!($journal instanceof Journal)) return AUTHORIZATION_DENY;
        
        if ($sectionEditorSubmission->getJournalId() != $journal->getId()) return AUTHORIZATION_DENY;

        // Save the section editor submission to the authorization context.
        $this->addAuthorizedContextObject(ASSOC_TYPE_ARTICLE, $sectionEditorSubmission);
        return AUTHORIZATION_PERMIT;
    }
}

?>