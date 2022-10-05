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
        <a href="sair.php">SAIR</a><br>
		<?php
		    foreach ($result as $_POST) {
			    echo 'Nome: ' . $_POST['nome'] . '<br>';
			    echo 'Telefone: ' . $_POST['telefone'] . '<br>';
			    echo 'Email: ' . $_POST['email'] . '<br>';
		    }
		?>
		
	</div>
    <form class="edit" id="form" method="POST">
        <input class="edit" type="password" name="novaSenha" placeholder="Nova senha" maxlenght="32">
        <input class="edit" type="password" name="confSenha" placeholder="Confirmar senha" maxlenght="32">
        <input class="edit" type="password" name="senhaAtual" placeholder="Senha atual" maxlenght="32"> 
        <input class="edit_submit" type="submit" value="SALVAR">         
    </form>

    <?php
	if (isset($_POST['novaSenha'])) {
        $novaSenha = addslashes($_POST['novaSenha']);
        $confirmarSenha = addslashes($_POST['confSenha']);
		$senhaAtual = addslashes($_POST['senhaAtual']);

        //verificação de campo em branco
        if (!empty($novaSenha) && !empty($confirmarSenha) && !empty($senhaAtual)) {
            if ($u->msgErro == "") {
                if ($novaSenha == $confirmarSenha && $senhaAtual == $_SESSION['senha']) {
                    if ($u->cadastrar($nome, $telefone, $email, $senha)) {
                    ?>
                        <div id="msg-sucesso">
                            Senha alterada com sucesso. <a Acesse para entrar!></a>
                        </div>
                    <?php
                    } else {
                    ?>
                        <div class="msg-erro">
                            Email já cadastrado.
                        </div>
                    <?php
                    }
                } else {
                    ?>
                    <div class="msg-erro">
                        As senhas estão diferentes!
                    </div>
                <?php
                }
            } else {
                ?>
                <div class="msg-erro">
                    <?php echo "Erro: " . $u->$msgErro; ?>
                </div>
            <?php
            }
        } else {
            ?>
            <div class="msg-erro">
                Preencha todos os campos!
            </div>
    <?php
    }
}
?>
</body>

</html>