<?php

/**
 * @file classes/controllers/grid/filter/FilterGridHandler.inc.php
 *
 * Copyright (c) 2013-2019 Simon Fraser University
 * Copyright (c) 2000-2019 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class FilterGridHandler
 * @ingroup classes_controllers_grid_filter
 *
 * @brief Handle OJS specific parts of filter grid requests.
 */

import('core.classes.controllers.grid.filter.PKPFilterGridHandler');

// import validation classes
import('app.classes.handler.validation.HandlerValidatorJournal');
import('core.classes.handler.validation.HandlerValidatorRoles');

class FilterGridHandler extends FilterGridHandler {
	/**
	 * Constructor
	 */
	function FilterGridHandler() {
		parent::PKPFilterGridHandler();
		$this->addRoleAssignment(
				array(ROLE_ID_SITE_ADMIN, ROLE_ID_JOURNAL_MANAGER),
				array('fetchGrid', 'addFilter', 'editFilter', 'updateFilter', 'deleteFilter'));
	}


	//
	// Implement template methods from PKPHandler
	//
	/**
	 * @see Handler::authorize()
	 */
	function authorize(&$request, &$args, $roleAssignments) {
		// Make sure the user can change the journal setup.
		import('app.classes.security.authorization.OjsJournalAccessPolicy');
		$this->addPolicy(new OjsJournalAccessPolicy($request, $roleAssignments));
		return parent::authorize($request, $args, $roleAssignments);
	}
}
