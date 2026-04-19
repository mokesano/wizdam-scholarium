<?php

/**
 * @file classes/core/Request.inc.php
 *
 * Copyright (c) 2013-2019 Simon Fraser University
 * Copyright (c) 2003-2019 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class Request
 * @ingroup core
 *
 * @brief Class providing operations associated with HTTP requests.
 * Requests are assumed to be in the format http://host.tld/index.php/<journal_id>/<page_name>/<operation_name>/<arguments...>
 * <journal_id> is assumed to be "index" for top-level site requests.
 */


import('core.classes.core.PKPRequest');

class Request extends Request {
	/**
	 * Deprecated
	 * @see PageRouter::getRequestedContextPath()
	 */
	function getRequestedJournalPath() {
		static $journal;
		$_this =& Request::_checkThis();

		if (!isset($journal)) {
			$journal = $_this->_delegateToRouter('getRequestedContextPath', 1);
			HookRegistry::call('Request::getRequestedJournalPath', array(&$journal));
		}

		return $journal;
	}

	/**
	 * Deprecated
	 * @see PageRouter::getContext()
	 */
	function &getJournal() {
		$_this =& Request::_checkThis();
		$returner = $_this->_delegateToRouter('getContext', 1);
		return $returner;
	}

	/**
	 * Deprecated
	 * @see PageRouter::getRequestedContextPath()
	 */
	function getRequestedContextPath($contextLevel = null) {
		$_this =& Request::_checkThis();

		// Emulate the old behavior of getRequestedContextPath for
		// backwards compatibility.
		if (is_null($contextLevel)) {
			return $_this->_delegateToRouter('getRequestedContextPaths');
		} else {
			return array($_this->_delegateToRouter('getRequestedContextPath', $contextLevel));
		}
	}

	/**
	 * Deprecated
	 * @see PageRouter::getContext()
	 */
	function &getContext($level = 1) {
		$_this =& Request::_checkThis();
		$returner = $_this->_delegateToRouter('getContext', $level);
		return $returner;
	}

	/**
	 * Deprecated
	 * @see PageRouter::getContextByName()
	 */
	function &getContextByName($contextName) {
		$_this =& Request::_checkThis();
		$returner = $_this->_delegateToRouter('getContextByName', $contextName);
		return $returner;
	}

	/**
	 * Deprecated
	 * @see PageRouter::url()
	 */
	function url($journalPath = null, $page = null, $op = null, $path = null,
			$params = null, $anchor = null, $escape = false) {
		$_this =& Request::_checkThis();
		return $_this->_delegateToRouter('url', $journalPath, $page, $op, $path,
			$params, $anchor, $escape);
	}

	/**
	 * Deprecated
	 * @see PageRouter::redirectHome()
	 */
	function redirectHome() {
		$_this =& Request::_checkThis();
		return $_this->_delegateToRouter('redirectHome');
	}
}

?>
