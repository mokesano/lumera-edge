{**
 * templates/form/hiddenInput.tpl
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * Hidden input element
 *}
<input type="hidden"
	  id="{$FBV_id|escape}"
	  name="{$FBV_name|escape}"
	  class="{$FBV_class}{if $FBV_validation} {$FBV_validation|escape}{/if}"
	  value="{$FBV_value|escape}"
	  {$FBV_hiddenInputParams} />
