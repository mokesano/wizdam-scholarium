<?php

/**
 * @defgroup plugins_citationLookup_crossref
 */

/**
 * @file plugins/citationLookup/crossref/PKPCrossrefCitationLookupPlugin.inc.php
 *
 * Copyright (c) 2013-2019 Simon Fraser University
 * Copyright (c) 2003-2019 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class PKPCrossrefCitationLookupPlugin
 * @ingroup plugins_citationLookup_crossref
 *
 * @brief Cross-application CrossRef citation lookup plugin
 */


import('app.classes.plugins.Plugin');

class CrossrefCitationLookupPlugin extends Plugin {
	/**
	 * Constructor
	 */
	function PKPCrossrefCitationLookupPlugin() {
		parent::Plugin();
	}


	//
	// Override protected template methods from PKPPlugin
	//
	/**
	 * @see Plugin::register()
	 */
	function register($category, $path) {
		if (!parent::register($category, $path)) return false;
		$this->addLocaleData();
		return true;
	}

	/**
	 * @see Plugin::getName()
	 */
	function getName() {
		return 'CrossrefCitationLookupPlugin';
	}

	/**
	 * @see Plugin::getDisplayName()
	 */
	function getDisplayName() {
		return __('plugins.citationLookup.crossref.displayName');
	}

	/**
	 * @see Plugin::getDescription()
	 */
	function getDescription() {
		return __('plugins.citationLookup.crossref.description');
	}
}

?>
