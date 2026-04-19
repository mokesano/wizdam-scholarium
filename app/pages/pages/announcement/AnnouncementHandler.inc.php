<?php

/**
 * @file pages/announcement/AnnouncementHandler.inc.php
 *
 * Copyright (c) 2013-2019 Simon Fraser University
 * Copyright (c) 2003-2019 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class AnnouncementHandler
 * @ingroup pages_announcement
 *
 * @brief Handle requests for public announcement functions.
 */


import('core.pages.announcement.PKPAnnouncementHandler');

class AnnouncementHandler extends AnnouncementHandler {
	/**
	 * Constructor
	 **/
	function AnnouncementHandler() {
		parent::PKPAnnouncementHandler();
		$this->addCheck(new HandlerValidatorJournal($this));
	}

	/**
	 * @see AnnouncementHandler::_getAnnouncementsEnabled()
	 */
	function _getAnnouncementsEnabled($request) {
		$journal =& $request->getJournal();
		return $journal->getSetting('enableAnnouncements');
	}

	/**
	 * @see AnnouncementHandler::_getAnnouncements()
	 */
	function &_getAnnouncements($request, $rangeInfo = null) {
		$journal =& $request->getJournal();

		$announcementDao =& DAORegistry::getDAO('AnnouncementDAO');
		$announcements =& $announcementDao->getAnnouncementsNotExpiredByAssocId(ASSOC_TYPE_JOURNAL, $journal->getId(), $rangeInfo);

		return $announcements;
	}

	/**
	 * @see AnnouncementHandler::_getAnnouncementsIntroduction()
	 */
	function _getAnnouncementsIntroduction($request) {
		$journal =& $request->getJournal();
		return $journal->getLocalizedSetting('announcementsIntroduction');
	}

	/**
	 * @see AnnouncementHandler::_announcementIsValid()
	 */
	function _announcementIsValid($request, $announcementId) {
		$journal =& $request->getJournal();
		$announcementDao =& DAORegistry::getDAO('AnnouncementDAO');
		return ($announcementId != null && $announcementDao->getAnnouncementAssocId($announcementId) == $journal->getId());
	}
}

?>
