<?php

/**
 * @defgroup plugins_citationOutput_vancouver
 */

/**
 * @file plugins/citationOutput/vancouver/PKPVancouverCitationOutputPlugin.inc.php
 *
 * Copyright (c) 2013-2019 Simon Fraser University
 * Copyright (c) 2003-2019 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class PKPVancouverCitationOutputPlugin
 * @ingroup plugins_citationOutput_vancouver
 *
 * @brief Cross-application Vancouver citation style plugin
 */


import('app.classes.plugins.Plugin');

class VancouverCitationOutputPlugin extends Plugin {
	/**
	 * Constructor
	 */
	function PKPVancouverCitationOutputPlugin() {
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
		return 'VancouverCitationOutputPlugin';
	}

	/**
	 * @see Plugin::getDisplayName()
	 */
	function getDisplayName() {
		return __('plugins.citationOutput.vancouver.displayName');
	}

	/**
	 * @see Plugin::getDescription()
	 */
	function getDescription() {
		return __('plugins.citationOutput.vancouver.description');
	}
}

?>
