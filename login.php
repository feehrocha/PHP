<?php
session_start();

if (!isset($_SESSION['usuario'])) {
	if (isset($_POST['usuario'])) $usuario = $_POST['usuario'];
	if (isset($_POST['senha'])) $senha = $_POST['senha'];
	if ($usuario == 'usuario1' && $senha == 'senha1') {
	echo 'Login Valido';
   	} else 
		echo "Login Invalido"; 
}
?>
