<DOCTYPE html>
    <html lang="pt-br">

    <head>
        <title>Home | Nordestina</title>
        <meta charset="UTF-8" />


        <?php
        include("verificaSessao.php");
        require_once "conectar.php";
        $sql = "SELECT * FROM PRATOS";
        $pratos = mysqli_query($con, $sql);
        ?>
        <link href="CSS/style.css" rel="stylesheet" type="text/css" />



    </head>

    <body>
        <?php include("cabecalho.php"); //cabeçalho
        ?>

        <h1>Nordestina,</h1>
        <h1>do jeitinho que você gosta!</h1>
        

        <h3>O Nordeste é uma das regiões do Brasil que são extremamente ricas em cultura, belezas naturais e principalmente em iguarias e diversidades gastronômicas. Seja no Maranhão, Piauí, Ceará, Pernambuco, Bahia, Rio Grande do Norte, Paraíba ou Alagoas, todos esses estados nordestinos possuem pratos típicos com modos de preparos diversificados, o que proporciona um turbilhão de sabores no prato nordestino que merecem ser apreciados seja para quem mora em estados vizinhos ou por viajantes de todas as partes do mundo.</h3>
        <img src="Nordestina/farofa-de-cuscuz.jpg" />

        <h3>Os cozinheiros da região são conhecidos pela “mão cheia” e principalmente por externar que o segredo do resultado espetacular é preparar com muito amor. Para deixar você por dentro do que encontrará nos restaurantes das cidades do Nordeste, apresentamos 10 pratos típicos sensacionais que você precisa saborear quando estiver nestas terras.</h3>

        <br>
        <br>
        <h1>~~ Nossos Pratos ~~</h1>
        <br>
        <br>
        <table>
            <?php
            foreach ($pratos as $prato) { ?>
                <tr>
                    <td>
                        <h2>
                            <?php
                            echo $prato['nome_do_prato'];
                            ?>
                        </h2>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>
                            <?php
                            echo $prato['inf_prato'];
                            ?>
                        </h3>
                    </td>
                </tr>
                <tr>
                    <td>
                        <img src="<?php
                                    echo $prato['imagem'];
                                    ?>" alt="<?php
                                                $prato['nome_do_prato'];
                                                ?>" />
                    </td>
                </tr>
            <tr>
                <td>
                    <br><br>
                </td>
            </tr>
            <?php } ?>
        </table>

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
                    <h3><i class='fab fa-instagram'></i> <a href="https://www.instagram.com/yuri958/"> @Yuri958</a> </h3>
                </div>

            </table>

        </footer>
    </body>


    </html>