<?php
	include_once('conexao.php');
	$name = $_POST['name'];
	$CPF = $_POST['CPF'];
	$selectalimentos= $_POST['selectalimentos'];
	
	$result_msg_contato = "INSERT INTO mensagens_contatos(name, CPF, selectalimentos, created) VALUES ('$name', '$CPF', '$selectalimentos', NOW())";
	if ($resultado_msg_contato= mysqli_query($conn, $result_msg_contato)) {
		echo "<scriptalert('salvo'); window.location = 'index.html';</script>";
	}
?>