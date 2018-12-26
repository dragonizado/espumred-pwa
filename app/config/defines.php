<?php 
	define('APPNAME',$config['appName']);
	define('CONTROLLERS_FOLDER',$config['controllersFolder'].DIRECTORY_SEPARATOR);
	define('CONTROLLER_DEFAULT',$config['controllerDefault']);
	define('DEBUG_MODE',$config['debugMode']);
	define('ASSETS_FOLDER',$config['assetsF'].DIRECTORY_SEPARATOR);

	define('URL_PUBLIC_FOLDER', 'public');
	define('URL_PROTOCOL', '//');
	define('URL_DOMAIN', $_SERVER['HTTP_HOST']);
	define('URL_SUB_FOLDER', str_replace(URL_PUBLIC_FOLDER, '', dirname($_SERVER['SCRIPT_NAME'])));
	define('URL', URL_PROTOCOL . URL_DOMAIN . URL_SUB_FOLDER.DIRECTORY_SEPARATOR);
 ?>