<?php

/**
 * @defgroup plugins_citationLookup_pubmed
 */

/**
 * @file plugins/citationLookup/pubmed/PKPPubmedCitationLookupPlugin.inc.php
 *
 * Copyright (c) 2013-2019 Simon Fraser University
 * Copyright (c) 2003-2019 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class PKPPubmedCitationLookupPlugin
 * @ingroup plugins_citationLookup_pubmed
 *
 * @brief Cross-application PubMed citation lookup plugin
 */


import('app.classes.plugins.Plugin');

class PubmedCitationLookupPlugin extends Plugin {
	/**
	 * Constructor
	 */
	function PKPPubmedCitationLookupPlugin() {
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
		return 'PubmedCitationLookupPlugin';
	}

	/**
	 * @see Plugin::getDisplayName()
	 */
	function getDisplayName() {
		return __('plugins.citationLookup.pubmed.displayName');
	}

	/**
	 * @see Plugin::getDescription()
	 */
	function getDescription() {
		return __('plugins.citationLookup.pubmed.description');
	}
}

?>
