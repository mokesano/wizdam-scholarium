<?php

/**
 * @defgroup plugins_citationParser_freecite
 */

/**
 * @file plugins/citationParser/freecite/FreeciteCitationParserPlugin.inc.php
 *
 * Copyright (c) 2013-2019 Simon Fraser University
 * Copyright (c) 2003-2019 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class FreeciteCitationParserPlugin
 * @ingroup plugins_citationParser_freecite
 *
 * @brief FreeCite citation extraction connector plug-in.
 */


import('core.plugins.citationParser.freecite.PKPFreeciteCitationParserPlugin');

class FreeciteCitationParserPlugin extends FreeciteCitationParserPlugin {
	/**
	 * Constructor
	 */
	function FreeciteCitationParserPlugin() {
		parent::PKPFreeciteCitationParserPlugin();
	}
}

?>
