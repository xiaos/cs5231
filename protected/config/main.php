<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'CS5231 Demo',

	//'theme'=>'v1',
	//'language'=>'zh_cn',
	//'language'=>'us_en',

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
		'application.modules.user.models.*',
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'root',
		 	// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('*','::1'),
		),
	),

	'controllerMap'=>array(
		'min'=>array(
			'class'=>'ext.minScript.controllers.ExtMinScriptController',
		),
	 ),


	// application components
	'components'=>array(
                 'clientScript'=>array(
			'class'=>'ext.minScript.components.ExtMinScript',
		),
                 'session' => array( 
			 'cookieParams' => array( 
					 'lifetime' => 30*24*3600, 
			 ), 
                 ), 
		'mailer' => array(
			'class' => 'application.extensions.mailer.EMailer',
			'pathViews' => 'application.views.email',
			'pathLayouts' => 'application.views.email.layouts'
		),
     		'cache'=>array(
			'class'=>'system.caching.CFileCache',
		),

		'user'=>array(
			// enable cookie-based authentication
			'loginUrl'=>array('/user/login'),
			'allowAutoLogin'=>true,
		),
		'request'=>array(
			'baseUrl'=>'',
		),

		// uncomment the following to enable URLs in path-format
		'urlManager'=>array(
			'urlFormat'=>'path',
			'showScriptName'=>false,
			'urlSuffix'=>'.html',

			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',

			),
		),
		
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=cs5231',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => 'csz786',
			'charset' => 'utf8',
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
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'email'=>'service@gmail.com',
		'countryCode'=>'65',
	),
);
