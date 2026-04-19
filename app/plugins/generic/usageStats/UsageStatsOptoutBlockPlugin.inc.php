<?php

/**
 * @file plugins/generic/usageStats/UsageStatsOptoutBlockPlugin.inc.php
 *
 * Copyright (c) 2013-2019 Simon Fraser University
 * Copyright (c) 2003-2019 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class UsageStatsOptoutBlockPlugin
 * @ingroup plugins_generic_usageStats
 *
 * @brief Opt-out component.
 */

import('core.classes.plugins.BlockPlugin');

class UsageStatsOptoutBlockPlugin extends BlockPlugin {

	/** @var string */
	var $_parentPluginName;


	/**
	 * Constructor
	 * @param $parentPluginName string
	 */
	function UsageStatsOptoutBlockPlugin($parentPluginName) {
		$this->_parentPluginName = $parentPluginName;
		parent::BlockPlugin();
	}


	//
	// Implement template methods from PKPPlugin.
	//
	/**
	 * @see Plugin::getHideManagement()
	 */
	function getHideManagement() {
		return true;
	}

	/**
	 * @see Plugin::getName()
	 */
	function getName() {
		return 'UsageStatsOptoutBlockPlugin';
	}

	/**
	 * @see Plugin::getDisplayName()
	 */
	function getDisplayName() {
		return __('plugins.reports.usageStats.optout.displayName');
	}

	/**
	 * @see Plugin::getDescription()
	 */
	function getDescription() {
		return __('plugins.generic.usageStats.optout.description');
	}

	/**
	* @see Plugin::isSitePlugin()
	*/
	function isSitePlugin() {
		return false;
	}

	/**
	 * @see Plugin::getPluginPath()
	 */
	function getPluginPath() {
		$plugin =& $this->_getPlugin();
		return $plugin->getPluginPath();
	}

	/**
	 * @see Plugin::getTemplatePath()
	 */
	function getTemplatePath() {
		$plugin =& $this->_getPlugin();
		return $plugin->getTemplatePath();
	}

	/**
	 * @see Plugin::getSeq()
	 */
	function getSeq() {
		// Identify the position of the faceting block.
		$seq = parent::getSeq();

		// If nothing has been configured then show the privacy
		// block after all other blocks in the context.
		if (!is_numeric($seq)) $seq = 99;

		return $seq;
	}


	//
	// Implement template methods from LazyLoadPlugin
	//
	/**
	 * @see LazyLoadPlugin::getEnabled()
	 */
	function getEnabled() {
		$plugin =& $this->_getPlugin();
		return $plugin->getEnabled();
	}


	//
	// Implement template methods from BlockPlugin
	//
	/**
	 * @see BlockPlugin::getBlockContext()
	 */
	function getBlockContext() {
		$blockContext = parent::getBlockContext();

		// Place the block on the right by default.
		if (!in_array($blockContext, $this->getSupportedContexts())) {
			$blockContext = BLOCK_CONTEXT_RIGHT_SIDEBAR;
		}

		return $blockContext;
	}

	/**
	 * @see BlockPlugin::getBlockTemplateFilename()
	 */
	function getBlockTemplateFilename() {
		// Return the opt-out template.
		return 'optoutBlock.tpl';
	}

	/**
	 * @see BlockPlugin::getContents()
	 */
	function getContents(&$templateMgr, $request) {
		$router = $request->getRouter(); /* @var $router PageRouter */
		$privacyInfoUrl = $router->url($request, null, 'usageStats', 'privacyInformation');
		$templateMgr->assign('privacyInfoUrl', $privacyInfoUrl);
		return parent::getContents($templateMgr, $request);
	}


	//
	// Private helper methods
	//
	/**
	 * Get the plugin object
	 * @return OasPlugin
	 */
	function &_getPlugin() {
		$plugin =& PluginRegistry::getPlugin('generic', $this->_parentPluginName);
		return $plugin;
	}
}

?>
