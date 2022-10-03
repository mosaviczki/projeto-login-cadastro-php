<?php
require_once 'classes/usuarios.php';
$u = new Usuario;
?>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="CSS/estilo.css">
</head>

<body>
    <div class="main_forms_cad">
        <img src="imagem/logo.png" width="200">
        <div class="block_forms_cad">
            <div class="body_forms_cad">
                <h1>CADASTRAR</h1>
                <form class"cad" id="form" method="POST">
                    <input class="cad" type="text" name="nome" placeholder="Nome Completo" maxlenght="30">
                    <input class="cad" type="text" name="telefone" placeholder="Telefone" maxlenght="30">
                    <input class="cad" type="email" name="email" placeholder="Usuário" maxlenght="40">
                    <input class="cad" type="password" name="senha" placeholder="Senha" maxlenght="32">
                    <input class="cad" type="password" name="confSenha" placeholder="Confirmar senha" maxlenght="32">
                    <input class="cad" type="submit" value="CADASTRAR">
                    <a class="cad" href="index.php">Ja possui cadastro?<strong> ENTRAR</strong>
                </form>
            </div>

        </div>

    </div>
    <?php
    //verificar se clicou no botão
    if (isset($_POST['nome'])) {
        $nome = addslashes($_POST['nome']);
        $telefone = addslashes($_POST['telefone']);
        $email = addslashes($_POST['email']);
        $senha = addslashes($_POST['senha']);
        $confirmarSenha = addslashes($_POST['confSenha']);

        //verificação de campo em branco
        if (!empty($nome) && !empty($telefone) && !empty($email) && !empty($senha) && !empty($confirmarSenha)) {
            $u->conectar("projeto_login", "localhost", "root", "");
            if ($u->msgErro == "") {
                if ($senha == $confirmarSenha) {
                    if ($u->cadastrar($nome, $telefone, $email, $senha)) {
    ?>
                        <div id="msg-sucesso">
                            Cadastrado com sucesso. <a Acesse para entrar!></a>
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