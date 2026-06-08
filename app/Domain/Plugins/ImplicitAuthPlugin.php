<?php
declare(strict_types=1);

Lumera\Domain\Plugins\Plugin;
namespace App\Domain\Plugins;

/**
 * @file app/Domain/Plugins/ImplicitAuthPlugin.php
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @class ImplicitAuthPlugin
 * @ingroup plugins
 *
 * @brief Abstract class for implicit authentication plugins
 *
 * Contributed by Dan Galewsky, University of Texas
 */

class ImplicitAuthPlugin extends Plugin {
    
	/**
	 * Constructor
	 */
    function __construct() {
        parent::__construct();
    }

	/**
	 * Authenticate a user based on some external conditions or system.
	 * Subclasses should implement this method.
	 * @return object User object for authenticated user, if authentication
	 * 	was successful; otherwise, the method should not return (i.e.
	 *	the request should be redirected to login or elsewhere).
	 */
	function implicitAuth() {
		die('ABSTRACT METHOD');
	}
}

?>