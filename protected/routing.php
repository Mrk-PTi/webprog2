<?php 
if(!array_key_exists('P', $_GET) || empty($_GET['P']))
	$_GET['P'] = 'home';

switch ($_GET['P']) {
	case 'home': require_once BASE_DIR.'index.php'; break;


	case 'add': IsUserLoggedIn() ? require_once PROTECTED_DIR.'user/add.php' : header('Location: index.php'); break;

	case 'login': !IsUserLoggedIn() ? require_once PROTECTED_DIR.'user/login.php' : header('Location: index.php'); break;

	case 'register': !IsUserLoggedIn() ? require_once PROTECTED_DIR.'user/register.php' : header('Location: index.php'); break;
	
	case 'admin_panel': IsUserLoggedIn() ? require_once PROTECTED_DIR.'user/admin_panel.php' : header('Location: index.php'); break;
	
	case 'description': IsUserLoggedIn() ? header('Location: ./protected/description.php') : header('Location: index.php'); break;
	
	case 'about': IsUserLoggedIn() ? header('Location: ./protected/about.php') : header('Location: index.php'); break;
	
	case 'contact': IsUserLoggedIn() ? header('Location: ./protected/contact.php') : header('Location: index.php'); break;

	case 'logout': IsUserLoggedIn() ? UserLogout() : header('Location: index.php'); break;

	default: require_once PROTECTED_DIR.'404.php'; break;
}

?>