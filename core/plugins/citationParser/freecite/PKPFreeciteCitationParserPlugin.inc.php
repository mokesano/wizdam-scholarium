<?php

/**
 * @defgroup plugins_citationParser_freecite
 */

/**
 * @file plugins/citationParser/freecite/PKPFreeciteCitationParserPlugin.inc.php
 *
 * Copyright (c) 2013-2019 Simon Fraser University
 * Copyright (c) 2003-2019 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class PKPFreeciteCitationParserPlugin
 * @ingroup plugins_citationParser_freecite
 *
 * @brief Cross-application FreeCite citation parser
 */


import('app.classes.plugins.Plugin');

class FreeciteCitationParserPlugin extends Plugin {
	/**
	 * Constructor
	 */
	function PKPFreeciteCitationParserPlugin() {
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
		return 'FreeciteCitationParserPlugin';
	}

	/**
	 * @see Plugin::getDisplayName()
	 */
	function getDisplayName() {
		return __('plugins.citationParser.freecite.displayName');
	}

	/**
	 * @see Plugin::getDescription()
	 */
	function getDescription() {
		return __('plugins.citationParser.freecite.description');
	}
}

?>
