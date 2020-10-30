<?php
require_once 'CLASSES/usuarios.php';
$u = new usuario;
?>

<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="CSS/estilo.css">
</head>

<body>

    <div id="corpo-form">
        <h1>Entrar</h1>
        <form method="post" action="autentica.php">

            <input type="email" name="email" placeholder="Usuário" />
            <input type="password" name="senha" placeholder="Senha" />
            <input type="submit" value="ACESSAR" />
            <a href="cadastrar.php">Ainda não é inscrito?<strong>Cadastre-se!</strong></a>
        </form>
    </div>
    <?php
    if (isset($_POST['email'])) {
        $email = addslashes($_POST['email']);
        $senha = addslashes($_POST['senha']);

        if (!empty($email) && !empty($senha)) {
            $u->conectar("projeto_web", "localhost", "root", "");
            if ($u->msgErro == "") {
            }
            if ($u->logar($email, $senha)) {
                header("location: telainicio.php");
            } else {

                echo "Email e/ou senha estão incorretos!";
            }
        } else {

            echo "Erro:" . $u->msgErro;
        }
    } else {
        echo "Preencha todos os campos!";
    }


    ?>
</body>

</html>