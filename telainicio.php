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
        <link href="CSS/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="CSS/album.css" rel="stylesheet" type="text/css" />


    </head>

    <body>
        <?php include("cabecalho.php"); //cabeçalho
        ?>
        <h1>Nordestina,</h1>
        <h1>do jeitinho que você gosta!</h1>

        <h3>O Nordeste é uma das regiões do Brasil que são extremamente ricas em cultura,
            belezas naturais e principalmente em iguarias e diversidades gastronômicas.
            Seja no Maranhão, Piauí, Ceará, Pernambuco, Bahia, Rio Grande do Norte,
            Paraíba ou Alagoas, todos esses estados nordestinos possuem pratos típicos com
            modos de preparos diversificados, o que proporciona um turbilhão de sabores no
            prato nordestino que merecem ser apreciados seja para quem mora em estados vizinhos
            ou por viajantes de todas as partes do mundo. Os cozinheiros da região são conhecidos
            pela “mão cheia” e principalmente por externar que o segredo do resultado espetacular
            é preparar com muito amor. Para deixar você por dentro do que encontrará nos restaurantes
            das cidades do Nordeste, apresentamos 10 pratos típicos sensacionais que você
            precisa saborear quando estiver nestas terras.</h3>

        <br>
        <br>
        <h1>~~ Nossos Pratos ~~</h1>
        <br>
        <br>
        <div class="container">

            <div class="row">

                <?php
                foreach ($pratos as $prato) { ?>
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail">
                                <title><?php
                                        echo $prato['nome_do_prato'];
                                        ?></title>

                                <rect x="0" y="0" width="150%" height="150%" fill="#55595c" />
                                <image class="img-responsiva" xlink:href="<?php
                                                                            echo $prato['imagem'];
                                                                            ?>" alt="<?php
                                                                                        $prato['nome_do_prato'];
                                                                                        ?>" />
                            </svg>
                            <div class="card-body">
                                <p class="card-text"><strong><?php echo $prato['nome_do_prato']; ?></strong></p>
                                <p><?php
                                    echo $prato['inf_prato'];
                                    ?></p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <?php echo "<a href='editarPrato.php?id_prato=" . $prato['id_prato'] . "' ><button type='button' class='btn btn-sm btn-outline-secondary'>Editar</button></a>"; ?>
                                        <?php echo "<a href='excluirPrato.php?id_prato=" . $prato['id_prato'] . "' onclick=\"return confirm('Tem certeza que deseja excluir este prato?');\"><button type='button' class='btn btn-sm btn-outline-secondary'>Remover</button></a>"; ?>
                                    </div>
                                    <small class="text-muted"><?php echo $prato['id_prato']; ?>° mais pedido</small>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php } ?>



            </div>

        </div>








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