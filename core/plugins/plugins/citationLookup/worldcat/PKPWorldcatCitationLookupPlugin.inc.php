<?php

/**
 * @defgroup plugins_citationLookup_worldcat
 */

/**
 * @file plugins/citationLookup/worldcat/PKPWorldcatCitationLookupPlugin.inc.php
 *
 * Copyright (c) 2013-2019 Simon Fraser University
 * Copyright (c) 2003-2019 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class PKPWorldcatCitationLookupPlugin
 * @ingroup plugins_citationLookup_worldcat
 *
 * @brief Cross-application WorldCat citation lookup plugin
 */


import('app.classes.plugins.Plugin');

class WorldcatCitationLookupPlugin extends Plugin {
	/**
	 * Constructor
	 */
	function PKPWorldcatCitationLookupPlugin() {
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
		return 'WorldcatCitationLookupPlugin';
	}

	/**
	 * @see Plugin::getDisplayName()
	 */
	function getDisplayName() {
		return __('plugins.citationLookup.worldcat.displayName');
	}

	/**
	 * @see Plugin::getDescription()
	 */
	function getDescription() {
		return __('plugins.citationLookup.worldcat.description');
	}
}

?>
