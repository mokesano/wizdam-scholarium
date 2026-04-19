<?php

/**
 * @defgroup plugins_citationOutput_abnt
 */

/**
 * @file plugins/citationOutput/abnt/AbntCitationOutputPlugin.inc.php
 *
 * Copyright (c) 2013-2019 Simon Fraser University
 * Copyright (c) 2003-2019 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class AbntCitationOutputPlugin
 * @ingroup plugins_citationOutput_abnt
 *
 * @brief ABNT citation style plug-in.
 */


import('core.plugins.citationOutput.abnt.PKPAbntCitationOutputPlugin');

class AbntCitationOutputPlugin extends AbntCitationOutputPlugin {
	/**
	 * Constructor
	 */
	function AbntCitationOutputPlugin() {
		parent::PKPAbntCitationOutputPlugin();
	}
}

?>
