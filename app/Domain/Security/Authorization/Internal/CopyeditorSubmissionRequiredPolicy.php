<?php
declare(strict_types=1);

Lumera\Modules\Security\Authorization\DataObjectRequiredPolicy;
namespace App\Domain\Security\Authorization\Internal;

/**
 * @file app/Domain/Security/Authorization/Internal/CopyeditorSubmissionRequiredPolicy.php
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @class CopyeditorSubmissionRequiredPolicy
 * @ingroup security_authorization_internal
 *
 * @brief Policy that ensures that the request contains a valid
 * copyeditor submission.
 * * MODERNIZED FOR WIZDAM FORK
 */

class CopyeditorSubmissionRequiredPolicy extends DataObjectRequiredPolicy {
    
    /**
     * Constructor
     * @param $request CoreRequest
     */
    public function __construct($request, $args, $submissionParameterName = 'articleId') {
        parent::__construct($request, $args, $submissionParameterName, 'user.authorization.invalidCopyditorSubmission');
    }

    /**
     * [SHIM] Backward Compatibility
     */
    public function CopyeditorSubmissionRequiredPolicy($request, $args, $submissionParameterName = 'articleId') {
        trigger_error(
            "Class '" . get_class($this) . "' uses deprecated constructor parent::CopyeditorSubmissionRequiredPolicy(). Please refactor to use parent::__construct().",
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
        // Get the request.
        $request = $this->getRequest();

        // Get the submission id.
        $submissionId = $this->getDataObjectId();
        if ($submissionId === false) return AUTHORIZATION_DENY;

        // Get the user
        $user = $request->getUser();
        // [MODERNISASI] is_a -> instanceof
        if (!($user instanceof CoreUser)) return AUTHORIZATION_DENY;

        // Validate the article id.
        $copyeditorSubmissionDao = DAORegistry::getDAO('CopyeditorSubmissionDAO');
        $copyeditorSubmission = $copyeditorSubmissionDao->getCopyeditorSubmission($submissionId, $user->getId());
        // [MODERNISASI] is_a -> instanceof
        if (!($copyeditorSubmission instanceof CopyeditorSubmission)) return AUTHORIZATION_DENY;

        // Check whether the article is actually part of the journal
        // in the context.
        $router = $request->getRouter();
        $journal = $router->getContext($request);
        
        // [MODERNISASI] is_a -> instanceof
        if (!($journal instanceof Journal)) return AUTHORIZATION_DENY;
        
        if ($copyeditorSubmission->getJournalId() != $journal->getId()) return AUTHORIZATION_DENY;

        // Save the copyeditor submission to the authorization context.
        $this->addAuthorizedContextObject(ASSOC_TYPE_ARTICLE, $copyeditorSubmission);
        return AUTHORIZATION_PERMIT;
    }
}

?>