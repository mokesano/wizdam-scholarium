<?php

/**
 * @defgroup plugins_metadata_mods34
 */

/**
 * @file plugins/metadata/mods34/PKPMods34MetadataPlugin.inc.php
 *
 * Copyright (c) 2013-2019 Simon Fraser University
 * Copyright (c) 2003-2019 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class PKPMods34MetadataPlugin
 * @ingroup plugins_metadata_mods34
 *
 * @brief Abstract base class for MODS metadata plugins
 */


import('core.classes.plugins.MetadataPlugin');

class Mods34MetadataPlugin extends MetadataPlugin {
	/**
	 * Constructor
	 */
	function PKPMods34MetadataPlugin() {
		parent::MetadataPlugin();
	}


	//
	// Override protected template methods from PKPPlugin
	//
	/**
	 * @see Plugin::getName()
	 */
	function getName() {
		return 'Mods34MetadataPlugin';
	}

	/**
	 * @see Plugin::getDisplayName()
	 */
	function getDisplayName() {
		return __('plugins.metadata.mods34.displayName');
	}

	/**
	 * @see Plugin::getDescription()
	 */
	function getDescription() {
		return __('plugins.metadata.mods34.description');
	}
}

?>
