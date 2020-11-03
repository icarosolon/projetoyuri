<?php

//require_once 'CLASSES/usuario_prato.php';
//$up = new usuario_prato;
//include("verificaSessao.php");
require_once "conectar.php";
$id_prato = $_GET['id_prato']; // recebido pela requisição
$sql = "SELECT * FROM PRATOS where id_prato = '$id_prato'";
$pratos = mysqli_query($con, $sql);
?>


<DOCTYPE html>
    <html lang="pt-br">

    <head>
        <title>Prato especial | Nordestina</title>
        <meta charset="UTF-8" />
        <?php
        include("verificaSessao.php");
        ?>
        <link href="CSS/style.css" rel="stylesheet" type="text/css" />
    </head>

    <body>

        <?php include("cabecalho.php"); //cabeçalho
        ?>


        <h1>Realize a edição do seu prato!</h1>
        <?php
        foreach ($pratos as $prato) {
        ?>
            <form method="POST" action="atualizaPrato.php" enctype="multipart/form-data">

                <input class="input-prato" name="id_prato" type="hidden" value="<?php echo $prato['id_prato'] ?>" />
                <input class="input-prato" name="nome_do_prato" type="text" placeholder="Nome do prato" maxlenght="40" value="<?php echo $prato['nome_do_prato'] ?>" />
                <textarea rows="5" class="input-area" name="inf_prato" type="text" placeholder="informações sobre o prato" maxlenght="500">
                <?php echo $prato['inf_prato'] ?></textarea>
                <input class=" input-prato" type="file" name="imagem" id="imagem" />

                <input class="input-prato" type="submit" value="Salvar" />

            </form>

        <?php
        }
        ?>


        <footer id="rodape">

            <table>
                <div id="rodapeimg">
                    <img src="Nordestina/logonordestina.png" width="100" />
                </div>

                <div id="rodapetxt">
                    <h3>
                        <p>ATENDIMENTO SEGUNDA A SÁBADO DAS 10H ÀS 20H, DOMINGOS E FERIADOS DAS 10H ÀS 18H</p>Número para contato: (74)988563831
                    </h3>
                    <a href="https://pt.wikipedia.org/wiki/Copyleft#:~:text=A%20frase%20%C3%A9%20um%20trocadilho,de%20copiar%20e%20modificar%20novamente.">&copy; Licença copleft</a>
                </div>

                <div>
                    <h3>Acesse o nosso instagram</h3>
                    <h3>para acompanhar os novos pratos e promoções</h3>
                    <h3><a href="https://www.instagram.com/yuri958/"> @Yuri958</a> </h3>
                </div>

            </table>

        </footer>
    </body>

    </html>