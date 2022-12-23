<?php
$url = $_SERVER['REQUEST_URI'];
if (!isset($_SESSION)){
	session_start();
}
switch($url){
	case '/tabela':
		require __DIR__ . '/View/Portaria/tabela.php';
		break;
	case '/':
		require __DIR__ . '/View/Portaria/form.php';
		break;
	default:
		echo('Page not found');
		exit();
}
	
