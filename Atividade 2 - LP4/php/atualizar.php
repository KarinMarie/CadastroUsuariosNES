<?php

	if(session_status() !== PHP_SESSION_ACTIVE)
		session_start();


	try {

		if(isset($_SESSION['login']) && isset($_POST['logradouro_att']))
		{
		
			$sql = $pdo->prepare("UPDATE usuario SET logradouro_user = ?, numero_user = ?, complemento_user = ?, bairro_user = ?, cidade_user = ?, UF_user = ?, CEP_user = ? WHERE `login` =  ? ");
			$sql->execute(array($_POST['logradouro_att'], $_POST['numero_att'], $_POST['complemento_att'], $_POST['bairro_att'], $_POST['cidade_att'], $_POST['estado_att'], $_POST['CEP_att'], $_SESSION['login']));
			
			echo "<script>$(document).ready(function(){ document.getElementById('dialog-atualizar').showModal(); });</script>";
		}

		include("atualizarsession.php");

	}

	catch(PDOException $e)
	{
		echo "<script>$(document).ready(function(){ document.getElementById('dialog-atualizar-fail').showModal(); });</script>";
	}

?>
