<?php 
	session_start();
	require_once "Controller/Controller.php";
	$Controller = new Controller();
	$task = isset($_GET['page_layout'])?$_GET['page_layout']:null;

	switch ($task) {
		case 'pagehome':
			$Controller->getPageHome();
			break;
		case 'them':
			$Controller->getPageInsert();
			break;
		case 'sua':
			$Controller->getPageUpdate();
			break;
		case 'xoa':
			$Controller->getPageDelete();
			break;
		case 'quaylai':
			$Controller->getPageHome();
            break;
		default:
			$Controller->getPageHome();
			break;
	}
 ?>