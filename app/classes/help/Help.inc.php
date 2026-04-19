<?php

/**
 * @file classes/help/Help.inc.php
 *
 * Copyright (c) 2013-2019 Simon Fraser University
 * Copyright (c) 2003-2019 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class Help
 * @ingroup help
 *
 * @brief Provides methods for translating help topic keys to their respected topic
 * help ids.
 */

import('core.classes.help.PKPHelp');

class Help extends Help {
	/**
	 * Constructor.
	 */
	function Help() {
		parent::PKPHelp();
		import('app.classes.help.AppHelpMappingFile');
		$mainMappingFile = new AppHelpMappingFile();
		$this->addMappingFile($mainMappingFile);
	}
}

?>
