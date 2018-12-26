<?php 
	define('ROOT',dirname(__FILE__).DIRECTORY_SEPARATOR);
	define('APP',ROOT.'app'.DIRECTORY_SEPARATOR);

	include APP.'config/config.php';
	include APP.'config/defines.php';
	include APP.'core/app.php';
	include APP.'core/controller.php';

	$app = new App();
 ?>