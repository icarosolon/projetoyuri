<?php

require_once 'conectar.php'; // conecta ao banco

include("verificaSessao.php"); // verifica se está logado
//$codCurso = $_POST['codCurso'];

// Se o usuário clicou no botão cadastrar efetua as ações
$nome_do_prato = trim($_POST['nome_do_prato']);
$inf_prato = trim($_POST['inf_prato']);


if (isset($_FILES['imagem'])) { // Verifica se foi selecionada alguma foto

    $extensao = strtolower(substr($_FILES['foto']['name'], -4)); //pega extensão do arquivo

    $novoNome =  time() . $extensao; // define o nome do arquivo pela função time() que retorna a hora do momento cadastrado.

    $diretorio = "Nordestina/"; //define o diretorio(pasta) onde sera salvo o arquivo

    move_uploaded_file($_FILES['imagem']['tmp_name'], $diretorio . $novoNome); //move para o diretório(pasta)

    $diretorioNome = $diretorio . $novoNome; //guarda o nome do diretório junto com o nome do arquivo para guardar este endereço no campo do banco de dados

    $sql = "INSERT INTO pratos(nome_do_prato, inf_prato, imagem) VALUES ('$nome_do_prato', '$inf_prato', '$diretorioNome')";
    mysqli_query($con, $sql); // Conecta ao banco e utiliza o comando sql acima, efetuando as mudanças no banco.

    echo "<script>alert('Prato cadastrado');</script>";
    echo "<meta HTTP-EQUIV=\"Refresh\" CONTENT=\"0; URL=telainicio.php\">";
}
