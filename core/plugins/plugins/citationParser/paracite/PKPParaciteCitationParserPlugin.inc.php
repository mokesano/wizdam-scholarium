<?php

/**
 * @defgroup plugins_citationParser_paracite
 */

/**
 * @file plugins/citationParser/paracite/PKPParaciteCitationParserPlugin.inc.php
 *
 * Copyright (c) 2013-2019 Simon Fraser University
 * Copyright (c) 2003-2019 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class PKPParaciteCitationParserPlugin
 * @ingroup plugins_citationParser_paracite
 *
 * @brief Cross-application ParaCite citation parser
 */


import('app.classes.plugins.Plugin');

class ParaciteCitationParserPlugin extends Plugin {
	/**
	 * Constructor
	 */
	function PKPParaciteCitationParserPlugin() {
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
		return 'ParaciteCitationParserPlugin';
	}

	/**
	 * @see Plugin::getDisplayName()
	 */
	function getDisplayName() {
		return __('plugins.citationParser.paracite.displayName');
	}

	/**
	 * @see Plugin::getDescription()
	 */
	function getDescription() {
		return __('plugins.citationParser.paracite.description');
	}
}

?>
