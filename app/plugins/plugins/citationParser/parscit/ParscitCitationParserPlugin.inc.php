<?php

/**
 * @defgroup plugins_citationParser_parscit
 */

/**
 * @file plugins/citationParser/parscit/ParscitCitationParserPlugin.inc.php
 *
 * Copyright (c) 2013-2019 Simon Fraser University
 * Copyright (c) 2003-2019 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class ParscitCitationParserPlugin
 * @ingroup plugins_citationParser_parscit
 *
 * @brief ParsCit citation extraction connector plug-in.
 */


import('core.plugins.citationParser.parscit.PKPParscitCitationParserPlugin');

class ParscitCitationParserPlugin extends ParscitCitationParserPlugin {
	/**
	 * Constructor
	 */
	function ParscitCitationParserPlugin() {
		parent::PKPParscitCitationParserPlugin();
	}
}

?>
