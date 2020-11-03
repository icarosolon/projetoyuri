<?php
require 'conectar.php';
$id_prato = $_GET['id_prato'];
$deletar = "DELETE FROM pratos WHERE id_prato=$id_prato";
$deletando = mysqli_query($con, $deletar);


echo '<meta HTTP-EQUIV="Refresh" CONTENT="0; URL=especialdodia.php">';
//header("Location: consultarAlunos.php");
