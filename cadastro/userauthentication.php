<?php
	$host="localhost";
	$user="root";
	$pass="";
	$banco="cadastro";
	$conexao=mysqli_connect($host, $user, $pass) or die(mysqli_error());
	mysqli_select_db($conexao,$banco) or die(mysqli_error());
?>

<html>
<head>

	<title>Autenticando usuário</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<script type="text/javascript">
	function loginsuccessfully() {
		setTimeout("windows.location='painel.php'", 5000);
	}

	function loginfailed() {
		setTimeout("windows.location='login.php'", 5000);
	}
</script>
</head>

<body>
<?php
$email=$_POST['email'];
$senha=$_POST['senha'];
$sql = mysqli_query($conexao, "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha'") or die(mysqli_error()); 
$row = mysqli_num_rows($sql);
if($row > 0){
	session_start();
	$SESSION['email']=$_POST['email'];
	$SESSION['senha']=$_POST['senha'];
	echo "<center><h1>Você foi autenticado!  </h1></center>";
	echo "<script>loginsuccessfully()</script>";
} else {
	echo "<center><h1>Nome de usuário ou senha incorreto. Tente novamente.</h1></center>";
	echo "<script>loginfailed()</script>";

}

?>
</body>
</html>