<?php

/**
 * @defgroup plugins_citationParser_regex
 */

/**
 * @file plugins/citationParser/regex/PKPRegexCitationParserPlugin.inc.php
 *
 * Copyright (c) 2013-2019 Simon Fraser University
 * Copyright (c) 2003-2019 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class PKPRegexCitationParserPlugin
 * @ingroup plugins_citationParser_regex
 *
 * @brief Cross-application regular expression based citation parser
 */


import('app.classes.plugins.Plugin');

class RegexCitationParserPlugin extends Plugin {
	/**
	 * Constructor
	 */
	function PKPRegexCitationParserPlugin() {
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
		return 'RegexCitationParserPlugin';
	}

	/**
	 * @see Plugin::getDisplayName()
	 */
	function getDisplayName() {
		return __('plugins.citationParser.regex.displayName');
	}

	/**
	 * @see Plugin::getDescription()
	 */
	function getDescription() {
		return __('plugins.citationParser.regex.description');
	}
}

?>
