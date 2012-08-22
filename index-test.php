<?php
/**
 * This is the bootstrap file for test application.
 * This file should be removed when the application is deployed for production.
 */
 if (version_compare(PHP_VERSION, '5.4.0') >= 0) {
    date_default_timezone_set('America/Santiago');
}


// change the following paths if necessary
$yii=dirname(__FILE__).'/../../yii/yii-git/framework/yii.php';
$config=dirname(__FILE__).'/protected/config/test.php';

// remove the following line when in production mode
defined('YII_DEBUG') or define('YII_DEBUG',true);

require_once($yii);
Yii::createWebApplication($config)->run();
