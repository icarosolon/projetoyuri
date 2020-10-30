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

            <input class="input-login" type="email" name="email" placeholder="Usuário" maxlength="50" minlength="5" required />
            <input class="input-login" type="password" name="senha" placeholder="Senha" required />
            <input class="input-login" type="submit" value="ACESSAR" />
            <a href="cadastrar.php">Ainda não é inscrito?<strong>Cadastre-se!</strong></a>
        </form>
    </div>

    <?php ?>


</body>

</html>