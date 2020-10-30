<?php

require_once 'CLASSES/usuario_prato.php';
$up = new usuario_prato;

?>


<DOCTYPE html>
    <html lang="pt-br">

    <head>
        <title>Prato especial | Nordestina</title>
        <meta charset="UTF-8" />
        <link href="style.css" rel="stylesheet" type="text/css" />
        <?php
        include("verificaSessao.php");
        ?>
    </head>

    <body>

        <?php include("cabecalho.php"); //cabeçalho
        ?>


        <h1>Informe qual prato deseja que seja adicionado ao nosso cardápio!</h1>

        <form method="POST" action="" enctype="multipart/form-data">

            <input type="text" placeholder="Nome do prato" maxlenght="40" />
            <input type="text" placeholder="informações sobre o prato" maxlenght="500" />

            <input type="file" name="imagem" id="imagem">

            <input type="submit" value="Cadastrar" />

        </form>
        <?php
        //verificar se clicou no botão
        if (isset($_POST['nome_do_prato'])) {
            $nome_do_prato = addslashes($_POST['nome_do_prato']);
            $inf_prato = addslashes($_POST['inf_prato']);
            //verificar se esta preenchido
            if (!empty($nome_do_prato) && !empty($inf_prato)) {
                $u->conectar("projeto_web", "localhost", "root", "");
                if ($u->msgErro == "") {

                    if ($u->cadastrar($nome_do_prato, $inf_prato)) {
                        echo "Prato cadastrado com sucesso!";
                    } else {
                        echo "Nome já cadastrado!";
                    }
                } else {
                    echo "Erro: " . $u->msgErro;
                }
            } else {
                echo "Preencha todos os campos!";
            }
        }


        ?>



    </body>


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
                <h3><a href="https://www.instagram.com/yuri958/"> @YURI958</a> </h3>
            </div>

        </table>

    </footer>


    </html>