<?php

if (isset($_POST['login']) and isset($_POST['senha'])){
	$login = $_POST['login'];
	$senha = $_POST['senha'];
	if ($login == 'lucaslemo' and $senha == 'senha'){
		header('Location: /form');
		exit();
	} else {
		$_SESSION['mensagem'] = "Login ou senha incorretos";
		$_SESSION['tipo-mensagem'] = 'danger';
		header('Location: /login');
		exit();
	}
}