<?php
// verificando se existe a sessão, se não houver, limpa o campo $login, limpa o campo $senha redireciona para a página index.html
include('navbar-link.html');
session_start();
if (!(isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)) {

    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('location:index.php');
}
