<?php
/**
* General Configuration
*
* All of your system's general configuration settings go in here. You can see a
* list of the available settings in vendor/craftcms/cms/src/config/GeneralConfig.php.
*
* @see craft\config\GeneralConfig
*/

return [
	// Global settings
	'*' => [
		// Environment
		'securityKey' => getenv('SECURITY_KEY'),
		'useProjectConfigFile' => false,

		// Cache
		'enableTemplateCaching' => true,
		'cacheMethod' => 'file',
		'cacheDuration' => 0, // 86400 = 24 Hours
		'cacheElementQueries' => false,

		// Account
		'userSessionDuration' => false,
		'useEmailAsUsername' => true,
		'verificationCodeDuration' => 'P2W',
		'autoLoginAfterAccountActivation' => true,
		'allowUpdates' => true,
		'allowAdminChanges' => true,
		'backupOnUpdate' => true,

		// URL
		'cpTrigger' => 'admin',
		'omitScriptNameInUrls' => true,
		'limitAutoSlugsToAscii' => true,

		// Misc
		'timezone' => 'America/Los_Angeles',
		'defaultWeekStartDay' => 1,
		'defaultCpLanguage' => "en",
		'enableCsrfProtection' => true,
		'defaultSearchTermOptions' => array(
			'subLeft' => true,
			'subRight' => true,
		),

		// Aliases
		// 'aliases' => [
		// 	'@siteBaseUrl' => getenv('DEFAULT_SITE_URL')
		// ],
	],

	// Dev environment settings
	'local' => [
		'isSystemLive' => true,
		'devMode' => true,
		'enableTemplateCaching' => false,
		'testToEmailAddress' => 'fedevtest@gmail.com',
		'backupCommand' => getenv('BACKUP_COMMAND'),
		'restoreCommand' => getenv('RESTORE_COMMAND')
	],

	// Staging environment settings
	'staging' => [
		// 'isSystemLive' => true,
	],

	// Production environment settings
	'production' => [
		
	],
];
