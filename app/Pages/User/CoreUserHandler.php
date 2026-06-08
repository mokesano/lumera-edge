<?php
declare(strict_types=1);

Lumera\Domain\Core\Application;
Lumera\Modules\User\InterestManager;
Lumera\Kernel\JSONMessage;
namespace App\Pages\User;

use App\Domain\Core\Application;
use Lumera\Kernel\JSONMessage;

/**
 * PSR-4 user utility handler for AJAX-style user actions.
 */
class CoreUserHandler extends UserHandler
{
    /**
     * Get reviewer interest keywords for autocomplete.
     *
     * @param array $args
     * @param object|null $request
     * @return string Serialized JSON response.
     */
    public function getInterests($args = [], $request = null)
    {
        if (!$request) {
            
            $request = Application::get()->getRequest();
        }

        $filter = trim((string) $request->getUserVar('term'));

        
        $interestManager = new \InterestManager();
        $interests = $interestManager->getAllInterests($filter);

        
        $json = new JSONMessage(true, $interests);

        header('Content-Type: application/json');
        return $json->getString();
    }
}
