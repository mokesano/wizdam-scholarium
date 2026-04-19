<?php

/**
 * @defgroup pages_manager
 */

/**
 * @file pages/manager/index.php
 *
 * Copyright (c) 2013-2019 Simon Fraser University
 * Copyright (c) 2003-2019 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @ingroup pages_manager
 * @brief Handle requests for journal management functions.
 *
 */

switch ($op) {
	//
	// Setup
	//
	case 'setup':
	case 'saveSetup':
	case 'setupSaved':
	case 'downloadLayoutTemplate':
	case 'resetPermissions':
		define('HANDLER_CLASS', 'SetupHandler');
		import('app.pages.manager.SetupHandler');
		break;
	//
	// People Management
	//
	case 'people':
	case 'showNoRole':
	case 'enrollSearch':
	case 'enroll':
	case 'unEnroll':
	case 'enrollSyncSelect':
	case 'enrollSync':
	case 'createUser':
	case 'suggestUsername':
	case 'mergeUsers':
	case 'disableUser':
	case 'enableUser':
	case 'removeUser':
	case 'editUser':
	case 'updateUser':
	case 'userProfile':
		define('HANDLER_CLASS', 'PeopleHandler');
		import('app.pages.manager.PeopleHandler');
		break;
	//
	// Section Management
	//
	case 'sections':
	case 'createSection':
	case 'editSection':
	case 'updateSection':
	case 'deleteSection':
	case 'moveSection':
		define('HANDLER_CLASS', 'SectionHandler');
		import('app.pages.manager.SectionHandler');
		break;
	//
	// Review Form Management
	//
	case 'reviewForms':
	case 'createReviewForm':
	case 'editReviewForm':
	case 'updateReviewForm':
	case 'previewReviewForm':
	case 'deleteReviewForm':
	case 'activateReviewForm':
	case 'deactivateReviewForm':
	case 'copyReviewForm':
	case 'moveReviewForm':
	case 'reviewFormElements':
	case 'createReviewFormElement':
	case 'editReviewFormElement':
	case 'deleteReviewFormElement':
	case 'updateReviewFormElement':
	case 'moveReviewFormElement':
	case 'copyReviewFormElement':
		define('HANDLER_CLASS', 'ReviewFormHandler');
		import('app.pages.manager.ReviewFormHandler');
		break;
	//
	// E-mail Management
	//
	case 'emails':
	case 'createEmail':
	case 'editEmail':
	case 'updateEmail':
	case 'deleteCustomEmail':
	case 'resetEmail':
	case 'exportEmails':
	case 'uploadEmails':
	case 'disableEmail':
	case 'enableEmail':
	case 'resetAllEmails':
		define('HANDLER_CLASS', 'EmailHandler');
		import('app.pages.manager.EmailHandler');
		break;
	//
	// Languages
	//
	case 'languages':
	case 'saveLanguageSettings':
	case 'reloadLocalizedDefaultSettings':
		define('HANDLER_CLASS', 'JournalLanguagesHandler');
		import('app.pages.manager.JournalLanguagesHandler');
		break;
	//
	// Files Browser
	//
	case 'files':
	case 'fileUpload':
	case 'fileMakeDir':
	case 'fileDelete':
		define('HANDLER_CLASS', 'FilesHandler');
		import('app.pages.manager.FilesHandler');
		break;
	//
	// Subscription Policies
	//
	case 'subscriptionPolicies':
	case 'saveSubscriptionPolicies':
	//
	// Subscription Types
	//
	case 'subscriptionTypes':
	case 'deleteSubscriptionType':
	case 'createSubscriptionType':
	case 'selectSubscriber':
	case 'editSubscriptionType':
	case 'updateSubscriptionType':
	case 'moveSubscriptionType':
	//
	// Subscriptions
	//
	case 'subscriptions':
	case 'subscriptionsSummary':
	case 'deleteSubscription':
	case 'renewSubscription':
	case 'createSubscription':
	case 'editSubscription':
	case 'updateSubscription':
	case 'resetDateReminded':
		define('HANDLER_CLASS', 'SubscriptionHandler');
		import('app.pages.manager.SubscriptionHandler');
		break;
	//
	// Import/Export
	//
	case 'importexport':
		define('HANDLER_CLASS', 'ImportExportHandler');
		import('app.pages.manager.ImportExportHandler');
		break;
	//
	// Plugin Management
	//
	case 'plugins':
	case 'plugin':
		define('HANDLER_CLASS', 'PluginHandler');
		import('app.pages.manager.PluginHandler');
		break;
	case 'managePlugins':
		define('HANDLER_CLASS', 'PluginManagementHandler');
		import('app.pages.manager.PluginManagementHandler');
		break;
	//
	// Group Management
	//
	case 'groups':
	case 'createGroup':
	case 'updateGroup':
	case 'deleteGroup':
	case 'editGroup':
	case 'groupMembership':
	case 'addMembership':
	case 'deleteMembership':
	case 'setBoardEnabled':
	case 'moveGroup':
	case 'moveMembership':
		define('HANDLER_CLASS', 'GroupHandler');
		import('app.pages.manager.GroupHandler');
		break;
	//
	// Statistics Functions
	//
	case 'statistics':
	case 'saveStatisticsSettings':
	case 'savePublicStatisticsList':
	case 'report':
	case 'reportGenerator':
	case 'generateReport':
		define('HANDLER_CLASS', 'StatisticsHandler');
		import('app.pages.manager.StatisticsHandler');
		break;
	//
	// Payment
	//
	case 'payments':
	case 'savePaymentSettings':
	case 'payMethodSettings':
	case 'savePayMethodSettings':
	case 'viewPayments':
	case 'viewPayment':
		define('HANDLER_CLASS', 'ManagerPaymentHandler');
		import('app.pages.manager.ManagerPaymentHandler');
		break;
	//
	//	announcements
	//
	case 'announcements':
	case 'deleteAnnouncement':
	case 'createAnnouncement':
	case 'editAnnouncement':
	case 'updateAnnouncement':
	//
	//	announcement Types
	//
	case 'announcementTypes':
	case 'deleteAnnouncementType':
	case 'createAnnouncementType':
	case 'editAnnouncementType':
	case 'updateAnnouncementType':
		define('HANDLER_CLASS', 'AnnouncementHandler');
		import('app.pages.manager.AnnouncementHandler');
		break;
	case 'index':
	case 'email':
		define('HANDLER_CLASS', 'ManagerHandler');
		import('app.pages.manager.ManagerHandler');
}

?>
