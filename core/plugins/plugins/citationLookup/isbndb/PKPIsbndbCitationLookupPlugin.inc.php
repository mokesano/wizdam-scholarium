<?php

/**
 * @defgroup plugins_citationLookup_isbndb
 */

/**
 * @file plugins/citationLookup/isbndb/PKPIsbndbCitationLookupPlugin.inc.php
 *
 * Copyright (c) 2013-2019 Simon Fraser University
 * Copyright (c) 2003-2019 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class PKPIsbndbCitationLookupPlugin
 * @ingroup plugins_citationLookup_isbndb
 *
 * @brief Cross-application ISBNdb citation lookup plugin
 */


import('app.classes.plugins.Plugin');

class IsbndbCitationLookupPlugin extends Plugin {
	/**
	 * Constructor
	 */
	function PKPIsbndbCitationLookupPlugin() {
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
		return 'IsbndbCitationLookupPlugin';
	}

	/**
	 * @see Plugin::getDisplayName()
	 */
	function getDisplayName() {
		return __('plugins.citationLookup.isbndb.displayName');
	}

	/**
	 * @see Plugin::getDescription()
	 */
	function getDescription() {
		return __('plugins.citationLookup.isbndb.description');
	}
}

?>
