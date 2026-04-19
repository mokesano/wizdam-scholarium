<?php

/**
 * @file classes/announcement/AnnouncementDAO.inc.php
 *
 * Copyright (c) 2013-2019 Simon Fraser University
 * Copyright (c) 2003-2019 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class AnnouncementDAO
 * @ingroup announcement
 * @see Announcement
 *
 * @brief Operations for retrieving and modifying Announcement objects.
 */


import('app.classes.announcement.Announcement');
import('core.classes.announcement.PKPAnnouncementDAO');

class AnnouncementDAO extends AnnouncementDAO {
	/**
	 * Constructor
	 */
	function AnnouncementDAO() {
		parent::PKPAnnouncementDAO();
	}

	/**
	 * @see AnnouncementDAO::newDataObject
	 */
	function newDataObject() {
		return new Announcement();
	}
}

?>
