<?php
declare(strict_types=1);

Lumera\Domain\Subscription\Subscription;
namespace App\Domain\Subscription;

/**
 * @defgroup subscription
 */
 
/**
 * @file app/Domain/Subscription/IndividualSubscription.php
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @class IndividualSubscription
 * @ingroup subscription 
 * @see IndividualSubscriptionDAO
 *
 * @brief Basic class describing an individual (non-institutional) subscription.
 * * MODERNIZED FOR WIZDAM FORK
 */

class IndividualSubscription extends Subscription {

    /**
     * Constructor
     */
    public function __construct() {
        parent::__construct();
    }

    /**
     * [SHIM] Backward Compatibility
     */
    public function IndividualSubscription() {
        trigger_error(
            "Class '" . get_class($this) . "' uses deprecated constructor parent::IndividualSubscription(). Please refactor to use parent::__construct().",
            E_USER_DEPRECATED
        );
        self::__construct();
    }

    /**
     * Check whether subscription is valid
     */
    public function isValid($check = SUBSCRIPTION_DATE_BOTH, $checkDate = null) {
        $subscriptionDao = DAORegistry::getDAO('IndividualSubscriptionDAO');
        return $subscriptionDao->isValidIndividualSubscription($this->getData('userId'), $this->getData('journalId'), $check, $checkDate);    
    }
}

?>