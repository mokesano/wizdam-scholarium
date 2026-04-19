<?php

/**
 * @defgroup plugins_citationOutput_apa
 */

/**
 * @file plugins/citationOutput/apa/PKPApaCitationOutputPlugin.inc.php
 *
 * Copyright (c) 2013-2019 Simon Fraser University
 * Copyright (c) 2003-2019 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class PKPApaCitationOutputPlugin
 * @ingroup plugins_citationOutput_apa
 *
 * @brief Cross-application APA citation style plugin
 */


import('app.classes.plugins.Plugin');

class ApaCitationOutputPlugin extends Plugin {
	/**
	 * Constructor
	 */
	function PKPApaCitationOutputPlugin() {
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
		return 'ApaCitationOutputPlugin';
	}

	/**
	 * @see Plugin::getDisplayName()
	 */
	function getDisplayName() {
		return __('plugins.citationOutput.apa.displayName');
	}

	/**
	 * @see Plugin::getDescription()
	 */
	function getDescription() {
		return __('plugins.citationOutput.apa.description');
	}
}

?>
