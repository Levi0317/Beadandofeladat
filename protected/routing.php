<?php

$_GET['P'] = (!array_key_exists('P', $_GET)) ? "home" : $_GET['P'];	

if(IsUserLoggedIn()) {
	switch ($_GET['P']) {
		case 'logout': UserLogout(); break;

		case 'list':require_once PROTECTED_ADMIN_DIR.'list.php'; break;

		case 'add': require_once PROTECTED_ADMIN_DIR.'add.php'; break;

		case 'modify': require_once  PROTECTED_ADMIN_DIR.'modify.php';
		break;

		case 'delete': require_once  PROTECTED_ADMIN_DIR.'delete.php';

		    break;

		case 'profile': break;

        case 'deleteall': require_once  PROTECTED_ADMIN_DIR.'deleteall.php';  break;

		default: require_once PROTECTED_ADMIN_DIR.'home.php'; break;
	}
} else {	
	switch ($_GET['P']) {
		case 'register': require_once PROTECTED_ADMIN_DIR.'register.php'; break;

		default: require_once PROTECTED_ADMIN_DIR.'login.php'; break;
	}
}
?>