<?php
session_start();
if (!isset($_SESSION['id_usuario'])) {
	header("location: ../login-cadastro/index.php");
	exit;
}
include 'classes/usuarios.php';
require_once 'classes/usuarios.php';
$u = new Usuario;
?>
<html lang="pt-BR">

<head>
	<meta charset="UTF-8">
	<title>Meus dados</title>
	<link rel="stylesheet" type="text/css" href="CSS/style.css">
</head>
<body>
	<?php
	$conn = $u->conectar("projeto_login", "localhost", "root", "");
	$sql = "SELECT * FROM usuarios WHERE id_usuario = :id";
	$stmt = $conn->prepare($sql);
	$stmt->bindValue(":id", $_SESSION['id_usuario']);
	$stmt->execute();
	$result = $stmt->fetchAll();
	?>
	<div class="my_account">
	    <a href="editar_dados.php">Editar meus dados</a><br>
		<?php
		    foreach ($result as $_POST) {
			    echo 'Nome: ' . $_POST['nome'] . '<br>';
			    echo 'Telefone: ' . $_POST['telefone'] . '<br>';
			    echo 'Email: ' . $_POST['email'] . '<br>';
		    }
		?>
		<a href="sair.php">SAIR</a>
	</div>

</body>

</html>