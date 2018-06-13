<html  = lang"pt-br">

<head>
<title>Cadastrando...</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>
<body>

<?php
	$host="localhost";
	$user="root";
	$pass="";
	$banco="cadastro";
	$conexao=mysqli_connect($host, $user, $pass) or die(mysqli_error());
	mysqli_select_db($conexao,$banco) or die(mysqli_error());
?>

<?php
	$nome=$_POST['nome'];
	$sobrenome=$_POST['sobrenome'];
	$cep=$_POST['cep'];
	$pais=$_POST['pais'];
	$estado=$_POST['uf'];
	$cidade=$_POST['cidade'];
	$email=$_POST['email'];
	$senha=$_POST['senha'];
	$rua=$_POST['rua'];
	$bairro=$_POST['bairro'];
	$numero=$_POST['numero'];
	
	$sql = mysqli_query($conexao, "INSERT INTO usuarios(nome, sobrenome, cep, logradouro, pais, estado, cidade, bairro, numero, email, senha) 
	VALUES('$nome','$sobrenome','$cep','$rua','$pais','$estado','$cidade','$bairro','$numero','$email','$senha')");

	echo "<center><h1>Seu cadastro foi realizado com sucesso!<br>Agradecemos a atenção.</h1></center>";
?>﻿

</body>
</html>