<?php

/**
 * @defgroup plugins_metadata_openurl10
 */

/**
 * @file plugins/metadata/openurl10/PKPOpenurl10MetadataPlugin.inc.php
 *
 * Copyright (c) 2013-2019 Simon Fraser University
 * Copyright (c) 2003-2019 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class PKPOpenurl10MetadataPlugin
 * @ingroup plugins_metadata_openurl10
 *
 * @brief Abstract base class for OpenURL 1.0 metadata plugins
 */


import('core.classes.plugins.MetadataPlugin');

class Openurl10MetadataPlugin extends MetadataPlugin {
	/**
	 * Constructor
	 */
	function PKPOpenurl10MetadataPlugin() {
		parent::MetadataPlugin();
	}


	//
	// Override protected template methods from PKPPlugin
	//
	/**
	 * @see Plugin::getName()
	 */
	function getName() {
		return 'Openurl10MetadataPlugin';
	}

	/**
	 * @see Plugin::getDisplayName()
	 */
	function getDisplayName() {
		return __('plugins.metadata.openurl10.displayName');
	}

	/**
	 * @see Plugin::getDescription()
	 */
	function getDescription() {
		return __('plugins.metadata.openurl10.description');
	}
}

?>
