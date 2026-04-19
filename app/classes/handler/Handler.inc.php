<?php

/**
 * @file classes/core/Handler.inc.php
 *
 * Copyright (c) 2013-2019 Simon Fraser University
 * Copyright (c) 2003-2019 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class Handler
 * @ingroup handler
 *
 * @brief Base request handler application class
 */


import('core.classes.handler.PKPHandler');
import('app.classes.handler.validation.HandlerValidatorJournal');
import('app.classes.handler.validation.HandlerValidatorSubmissionComment');

class Handler extends Handler {
	function Handler() {
		parent::PKPHandler();
	}
}

?>
