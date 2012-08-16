<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Fundación GNUCHILE',
	'theme'=>'base',
        'language'=>'es',
	// preloading 'log' component
	'preload'=>array(
            'log',
            'less',
            'bootstrap', // preload the bootstrap component
            ),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
//                'application.modules.userGroups.*',
//                'application.modules.user.models.*',
                'ext.giix.components.*', // giix components
	),

	'modules'=>array(
            /*
                'userGroups'=>array(
                    'accessCode'=>'1234',
                ),
                'user' => array(
                        'debug' => false,
                        'userTable' => 'user',
                        'translationTable' => 'translation',
                ),
                'usergroup' => array(
                        'usergroupTable' => 'usergroup',
                        'usergroupMessagesTable' => 'user_group_message',
                ),
                'membership' => array(
                        'membershipTable' => 'membership',
                        'paymentTable' => 'payment',
                ),
                'profile' => array(
                        'privacySettingTable' => 'privacysetting',
                        'profileFieldTable' => 'profile_field',
                        'profileTable' => 'profile',
                        'profileCommentTable' => 'profile_comment',
                        'profileVisitTable' => 'profile_visit',
                ),
                'role' => array(
                        'roleTable' => 'role',
                        'userRoleTable' => 'user_role',
                        'actionTable' => 'action',
                        'permissionTable' => 'permission',
                ),
            */
                // uncomment the following to use Gii
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'1234',
		 	// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
                    	'generatorPaths' => array(
                            'ext.giix.generators', // giix generators
                            'ext.giiplus',
                            'bootstrap.gii',
                        ),
		),
		'blog',
                
		
	),

	// application components
	'components'=>array(
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
                        
                        // yii-user-management
                        //'class' => 'application.modules.user.components.YumWebUser',
                        //'loginUrl' => array('//user/user/login'),
		),
		'urlManager'=>array(
			'urlFormat'=>'path',
			'showScriptName'=>false,
                        //'caseSensitive'=>false,
			'rules'=>array(
				// removes 'site' & 'index' from urls and add pretty urls to static pages
				'contact'=>'site/contact',
				'page/<view:\w+>'=>'site/page',
				'/'=>'site/index',
                
                '<module:blog>'=>'<module>/default/index',
                '<module:blog>/index'=>'<module>/default/index',
				'<module:blog>/<username:\w+>'=>'<module>/default/view/',

//                                'login'=>'user/user/login',
//                                'site/login'=>'user/user/login',
				
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
				
				// add support for modules
				'<module:\w+>/<controller:\w+>/<action:\w+>'=>'<module>/<controller>/<action>',
			),
		),
                /*
		'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),
                 *
                 */
		// uncomment the following to use a MySQL database
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=gnucl_site',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',
                        'tablePrefix' => '',
		),
		'errorHandler'=>array(
			// use 'site/error' action to display errors
                        'errorAction'=>'site/error',
                ),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
                'cache' => array(
                    'class' => 'system.caching.CDummyCache'
                ),
            	'messages' => array (
                    //'extensionBasePaths' => array(
                     //   'giix' => 'ext.giix.messages', // giix messages directory.
                    //),
                ),
                'bootstrap'=>array(
                    'class'=>'ext.bootstrap.components.Bootstrap', // assuming you extracted bootstrap under extensions
                ),
                'less'=>array(
                    'class'=>'ext.less.components.LessCompiler',
                    'forceCompile'=>true, // indicates whether to force compiling
                    'paths'=>array(
                        Yii::app()->theme->basePath."less/style1.less"=>Yii::app()->theme->basePath.'css/style1.css',
                    ),
                ),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'admin@example.com',
	),
);
