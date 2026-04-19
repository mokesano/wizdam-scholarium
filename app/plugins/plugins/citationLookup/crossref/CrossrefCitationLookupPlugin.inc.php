<?php

/**
 * @defgroup plugins_citationLookup_crossref
 */

/**
 * @file plugins/citationLookup/crossref/CrossrefCitationLookupPlugin.inc.php
 *
 * Copyright (c) 2013-2019 Simon Fraser University
 * Copyright (c) 2003-2019 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class CrossrefCitationLookupPlugin
 * @ingroup plugins_citationLookup_crossref
 *
 * @brief CrossRef citation database connector plug-in.
 */


import('core.plugins.citationLookup.crossref.PKPCrossrefCitationLookupPlugin');

class CrossrefCitationLookupPlugin extends CrossrefCitationLookupPlugin {
	/**
	 * Constructor
	 */
	function CrossrefCitationLookupPlugin() {
		parent::PKPCrossrefCitationLookupPlugin();
	}
}

?>
