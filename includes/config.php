<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}


/***************************************************************
*                                                              *
*                                                              *
*              Database Configuration                          *
*                                                              *
*                                                              *
***************************************************************/
if (stripos($_SERVER['HTTP_HOST'],"prod.tst") !== false) {
	$config = array(
		'Database' => array(
			'server' => 'localhost',
			'username' => 'root',
			'password' => '',
			'database' => 'database'

		),
		'Site' => array(
			'name' => 'Site Name',
			'url' => 'http://prod.tst:8082/test-repo',
			'email' => 'test@example.com',
            'root' => $_SERVER['DOCUMENT_ROOT'] . '/test-repo'
		)
	);
}
else if (stripos($_SERVER['HTTP_HOST'],"localhost") !== false) {
	$config = array(
		'Database' => array(
			'server' => 'localhost',
			'username' => 'root',
			'password' => '',
			'database' => 'database'

		),
		'Site' => array(
			'name' => 'Site Name',
			'url' => 'http://localhost/harwood2',
			'email' => 'test@example.com',
            'root' => $_SERVER['DOCUMENT_ROOT'] . '/localhost/harwood2'
		)
	);
}
else {
	//LIVE SERVER
	$config = array(
		'Database' => array(
			'server' => 'localhost',
			'username' => 'root',
			'password' => 'root',
			'database' => 'database'

		),
		'Site' => array(
			'name' => 'Live Site',
			'url' => 'https://live.ca',
			'email' => 'test@example.com',
            'root' => $_SERVER['DOCUMENT_ROOT']
		)
	);
}


/***************************************************************
*                                                              *
*                                                              *
*              Config Constants                                *
*                                                              *
*                                                              *
***************************************************************/
//Database Info
define('DB_SERVER', $config['Database']['server']);
define('DB_CHARSET', 'utf8mb4');
define('DB_USER', $config['Database']['username']);
define('DB_PASS', $config['Database']['password']);
define('DB_NAME', $config['Database']['database']);

//Site Info
define('SITE_URL', $config['Site']['url']);
define('SITE_NAME', $config['Site']['name']);
define('SITE_EMAIL', $config['Site']['email']);
define('SITE_ROOT', $config['Site']['root']);

//Directories
define('SITE_IMAGES', SITE_URL . "/assets/images/");
define('SITE_CSS', SITE_URL . "/assets/css/");
define('SITE_JS', SITE_URL . "/assets/js/");
