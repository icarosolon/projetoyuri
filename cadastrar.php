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
        <div class="fundo-branco">
            <h1>Cadastrar</h1>
            <form method="post">

                <input class="input-border" type="text" name="nome" placeholder="Nome completo" maxlength="30" required />
                <input class="input-border" type="text" name="telefone" placeholder="Telefone" maxlength="30" required />
                <input class="input-border" type="email" name="email" placeholder="Email" maxlength="40" required />
                <input class="input-border" type="password" name="senha" placeholder="Senha" maxlength="15" required />
                <input class="input-border" type="password" name="confsenha" placeholder="Confirmar senha" maxlength="15" required />
                <input class="input-border" type="submit" value="CADASTRAR" />

            </form>
        </div>

    </div>
    <?php
    //verificar se clicou no botão
    if (isset($_POST['nome'])) {
        $nome = addslashes($_POST['nome']);
        $telefone = addslashes($_POST['telefone']);
        $email = addslashes($_POST['email']);
        $senha = addslashes($_POST['senha']);
        $confirmarSenha = addslashes($_POST['confsenha']);
        //verificar se esta preenchido
        if (!empty($nome) && !empty($telefone) && !empty($email) && !empty($senha) && !empty($confirmarSenha)) {
            $u->conectar("projeto_web", "localhost", "root", "");
            if ($u->msgErro == "") {
                if ($senha == $confirmarSenha) {
                    if ($u->cadastrar($nome, $telefone, $email, $senha)) {
                        echo "<script>alert('Cadastrado com sucesso! Acesse para entrar!')</script>";
                    } else {
                        echo "<script>alert('Email ja cadastrado!')</script>";
                    }
                } else {
                    echo "<script>alert('Senha e confirmar senha não correspondem!')</script>";
                }
            } else {
                echo "Erro: " . $u->msgErro;
            }
        } else {
            echo "<script>alert('Preencha todos os campos!')</script>";
        }
    }


    ?>
</body>

</html>