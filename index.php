<?php
if (!isset($_SESSION)){
	session_start();
}
$url = $_SERVER['REQUEST_URI'];
switch($url){
	case '/':
		require __DIR__ . '/View/Portaria/login.php';
		break;
	case '/dashboard':
		require __DIR__ . '/View/Portaria/dashboard.php';
		break;
	case '/login':
		require __DIR__ . '/View/Portaria/login.php';
		break;
	case '/valida-login':
		require __DIR__ . '/View/Portaria/funcLogin.php';
		break;
	case '/form':
		require __DIR__ . '/View/Portaria/form.php';
		break;
	case '/tabela':
		require __DIR__ . '/View/Portaria/tabela.php';
		break;
	default:
		echo('Not Found 404');
		exit();
}
