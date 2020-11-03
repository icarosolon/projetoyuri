<?php

//require_once 'CLASSES/usuario_prato.php';
//$up = new usuario_prato;
//include("verificaSessao.php");
require_once "conectar.php";
$sql = "SELECT * FROM PRATOS";
$pratos = mysqli_query($con, $sql);

?>


<DOCTYPE html>
    <html lang="pt-br">

    <head>
        <title>Gerenciamento de pratos | Nordestina</title>
        <meta charset="UTF-8" />
        <?php
        include("verificaSessao.php");
        ?>
        <link href="CSS/style.css" rel="stylesheet" type="text/css" />
    </head>

    <body>

        <?php include("cabecalho.php"); //cabeçalho
        ?>


        <h1>Informe qual prato deseja que seja adicionado ao nosso cardápio!</h1>


        <form method="POST" action="cadastrarPrato.php" enctype="multipart/form-data">

            <input class="input-prato" name="nome_do_prato" type="text" placeholder="Nome do prato" maxlenght="40" />
            <input class="input-prato" name="inf_prato" type="text" placeholder="informações sobre o prato" maxlenght="500" />
            <input class="input-prato" type="file" name="imagem" id="imagem" />

            <input class="input-prato" type="submit" value="Cadastrar" />

        </form>

        <br><br>
        <h1>~~ Pratos Cadastrados ~~</h1>

        <div class="fundo-branco">
            <table>
                <tr>
                    <th style="width: 20%;">
                        <h2>
                            <strong>Nome</strong>
                        </h2>
                    </th>
                    </h3>
                    <th style="width: 70%;">
                        <h2>
                            <strong>Descrição</strong>
                        </h2>
                    </th>
                    <th style="width: 10%;">
                        <h2>
                            <strong>Botões</strong>
                        </h2>
                    </th>
                </tr>
                <?php

                foreach ($pratos as $prato) { ?>

                    <tr>
                        <td>
                            <h3>
                                <?php
                                echo $prato['nome_do_prato'];
                                ?>
                            </h3>
                        </td>
                        <td>
                            <h3>
                                <?php
                                echo $prato['inf_prato'];
                                ?>
                                <h3>
                        </td>
                        <td>
                            <?php echo "<a href='editarPrato.php?id_prato=" . $prato['id_prato'] . "' ><button>Editar</button></a>"; ?>
                            <?php echo "<a href='excluirPrato.php?id_prato=" . $prato['id_prato'] . "' onclick=\"return confirm('Tem certeza que deseja excluir este prato?');\"><button>Excluir</button></a>"; ?>
                        </td>
                    </tr> <?php } ?>
            </table>
        </div>
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
                <h3><a href="https://www.instagram.com/yuri958/"> @Yuri958</a> </h3>
            </div>

        </table>

    </footer>


    </html>