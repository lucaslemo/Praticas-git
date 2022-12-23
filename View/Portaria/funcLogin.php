<?php

if (isset($_POST['login']) and isset($_POST['senha'])){
	$login = $_POST['login'];
	$senha = $_POST['senha'];
	if ($login == 'lucaslemo' and $senha == 'senha'){
		header('Location: /dashboard');
		exit();
	} else {
		if ($login != 'lucaslemo' && $senha != 'senha')
			$_SESSION['mensagem'] = "Login e senha incorretos";
		else if ($senha != 'senha')
			$_SESSION['mensagem'] = "Senha incorreta";
		else
			$_SESSION['mensagem'] = "Login incorreto";
		$_SESSION['tipo-mensagem'] = 'danger';
		header('Location: /login');
		exit();
	}
}