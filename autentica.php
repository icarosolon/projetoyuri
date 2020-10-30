<?php

//inicia a sessão
session_start();
//recupera os dados do formulário
$email = trim($_POST['email']);
$senha = md5(trim($_POST['senha']));

//conectar ao banco de dados 
require_once 'conectar.php';

//a variavel $result pega as varias $login e $senha, faz uma pesquisa na tabela de usuarios
$result = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
//realiza conexão e testa a query $result 
$ab = mysqli_query($con, $result);
//armazena o resultado da query em uma variável
$nome = mysqli_fetch_array($ab);

if (mysqli_num_rows(mysqli_query($con, $result)) > 0) {
    $_SESSION['email'] = $email;
    $_SESSION['senha'] = $senha;
    $_SESSION['nome'] = $nome['nome'];
    header('location:telainicio.php');
} else {
    unset($_SESSION['login']);
    unset($_SESSION['senha']);
    header('location:index.html');
    echo "<script>alert('Login/Senha incorretos');</script>";
    //echo '<meta HTTP-EQUIV="Refresh" CONTENT="0; URL=index.php">';
}
