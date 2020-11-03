<?php
echo "<meta charset='UTF-8' />";
require_once 'conectar.php';


$id_prato = trim($_POST['id_prato']);
$nome_do_prato = trim($_POST['nome_do_prato']);
$inf_prato = trim($_POST['inf_prato']);


if (!empty($nome_do_prato)) {

    $sql = "update pratos set nome_do_prato ='$nome_do_prato' where codCurso = '$id_prato' ";
    mysqli_query($con, $sql) or trigger_error(mysqli_error() . " " . $sql);
}

if (!empty($inf_prato)) {
    $sql = "update pratos set inf_prato = '$inf_prato' where codCurso = '$id_prato' ";
    mysqli_query($con, $sql) or trigger_error(mysqli_error() . " " . $sql);
}



echo "<script>alert('Cadastro Atualizado!');</script>";
//echo '<meta HTTP-EQUIV="Refresh" CONTENT="0; URL=especialdodia.php">';
