<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <title>Mirror Fashion</title>
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/estilo.css">
        <meta name="viewport" content="width=device-width">
    </head>

<body>

    <header class="container">
        <h1><img src="img/logo.jpg" alt="Logo da Mirror Fashion"></h1>

        <p class="sacola">
            Nenhum item na sacola de compras
        </p>
        <nav class="menu-opcoes">
            <ul>
                <li><a href="#">Sua conta</a></li>
                <li><a href="#">Lista de Desejos</a></li>
                <li><a href="#">Cartão Fidelidade</a></li>
                <li><a href="sobre.html" target="-blank!">Sobre</a></li>
                <li><a href="#">Ajuda</a></li>
            </ul>
        </nav>
    </header>
    <section>
        <div class="container destaque">
            <section class="busca">
                <h2>Busca</h2>

                <form>
                    <input type="search">
                    <button>Buscar</button>
                </form>
            </section>
            <!--fim .busca-->
            <section class="menu-departamentos">
                <h2>Departamentos</h2>

                <nav>
                    <ul>
                        <li>
                            <a href="#">Blusas e Camisas</a>
                            <ul>
                                <!--sub menu1-->
                                <li><a href="#">Manga Curta</a></li>
                                <li><a href="#">Manga Comprida</a></li>
                                <li><a href="#">Camisa Social</a></li>
                                <li><a href="#">Camisa Casual</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Calças</a>
                            <ul>
                                <!--sub menu2-->
                                <li><a href="#">Calça Moletom</a></li>
                                <li><a href="#">Calça Jeans</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Saias</a></li>
                        <li><a href="#">Vestidos</a></li>
                        <li><a href="#">Sapatos</a></li>
                        <li><a href="#">Bolsas e Carteiras</a></li>
                        <li><a href="#">Acessórios</a></li>
                    </ul>
                </nav>
            </section>
            <!--Fim .menu-departamentos-->
            <section class="banner-destaque">
                <figure>
                    <img src="img/destaque-home.png" alt="Programação: Big City Night">
                </figure>
            </section>
            <!--Fim .banner-destaque-->
        </div>
    </section>
    <!--fim .container .destaque-->
    <section>

        <div class="container paineis">
            <!-- os paineis de novidades e mais vendidos entrarão aqui dentro-->
            <!--fim .container .paineis-->
            <section class="painel novidades">
                <h2>Novidades</h2>
                <ol>
                    <!-- primeiro produto-->
                    <li>
                        <form action="produto.php" method="POST" name="form1">
                            <figure onclick="document.form1.submit()">
                                <img src="img/produtos/miniatura1.jpg" alt="miniatura1">
                                <figcaption >Fuzz Cardigan por R$ 129,90</figcaption>
                                <input type='hidden' name='nome' value='Fuzzy Cardigan'>
                                <input type='hidden' name='preco' value='129,'>
                            </figure>
                        </form>
                    </li>
                    <!--fim do primeiro produto-->
                    <a href="produto.html"></a>
                    <li>
                        <figure>
                            <img src="img/produtos/miniatura2.jpg" alt="miniatura2">
                            <figcaption>Fuzz Cardigan por R$ 129,90 </figcaption>
                        </figure>
                    </li>
                    <!--Fim do segundo produto-->
                    <li>
                        <figure>
                            <img src="img/produtos/miniatura3.jpg" alt="miniatura3">
                            <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
                        </figure>
                    </li>
                    <!--fim do terceiro produto-->
                    <li>
                        <figure>
                            <img src="img/produtos/miniatura9.jpg" alt="miniatura9">
                            <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
                        </figure>
                    </li>
                    <!--fim do quarto produto-->
                    <li>
                        <img src="img/produtos/miniatura15.jpg" alt="miniatura15">
                        <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
                    </li>
                    <!--fim do quinto produto-->
                    <li>
                        <img src="img/produtos/miniatura11.jpg" alt="miniatura11">
                        <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
                    </li>
                    <!--fim do sexto produto-->

                    <li>
                        <img src="img/produtos/miniatura10.jpg">
                        <figcaption>Fuzzy Cardigan po $129,90</figcaption>
                    </li>
                    <!--fim do 7ºproduto-->
                    <li>
                        <img src="img/produtos/miniatura10.jpg">
                        <figcaption>Fuzzy Cardigan po $129,90</figcaption>
                    </li>
                    <!--fim do 8º produto-->
                    <li>
                        <img src="img/produtos/miniatura10.jpg">
                        <figcaption>Fuzzy Cardigan po $129,90</figcaption>
                    </li>
                    <!--fim do 9º produto-->
                    <li>
                        <img src="img/produtos/miniatura10.jpg">
                        <figcaption>Fuzzy Cardigan po $129,90</figcaption>
                    </li>
                    <!--fim do 10º produto-->
                    <li>
                        <img src="img/produtos/miniatura10.jpg">
                        <figcaption>Fuzzy Cardigan po $129,90</figcaption>
                    </li>
                    <!--fim do 11º produto-->
                    <li>
                        <img src="img/produtos/miniatura10.jpg">
                        <figcaption>Fuzzy Cardigan po $129,90</figcaption>
                    </li>
                    <!--fim do 12º prduto-->

                </ol>
                <button type="button">Mostrar mais</button>
            </section>
            <section class="painel mais-vendidos">
                <h2>Mais Vendidos</h2>
                <ol>
                    <li>
                        <img src="img/produtos/miniatura10.jpg" alt="miniatura10">
                        <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
                    </li>
                    <!--fim do primeiro produto mais vendido-->
                    <li>
                        <img src="img/produtos/miniatura8.jpg" alt="miniatura8">
                        <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
                    </li>
                    <!-- fim do  segundo produto mis vendido-->
                    <li>
                        <img src="img/produtos/miniatura7.jpg" alt="miniatura7">
                        <figcaption>Fuzz Cardigan por R$ 129,90 </figcaption>
                    </li>
                    <!--fim do terceiro produto mais vendido-->
                    <li>
                        <img src="img/produtos/miniatura13.jpg" alt="miniatura13">
                        <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
                    </li>
                    <!--fim do quarto produto mais vendido-->
                    <li>
                        <img src="img/produtos/miniatura14.jpg" alt="miniatura14">
                        <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
                    </li>
                    <!--fim do quinto produto mais vendido-->
                    <li>
                        <img src="img/produtos/miniatura12.jpg" alt="miniatura12">
                        <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
                    </li>
                    <!--fim do sexto produto mais vendido-->
                    <li>
                        <img src="img/produtos/miniatura10.jpg">
                        <figcaption>Fuzzy Cardigan po $129,90</figcaption>
                    </li>
                    <!--fim do setimo produto mais vendido-->
                    <li>
                        <img src="img/produtos/miniatura10.jpg">
                        <figcaption>Fuzzy Cardigan po $129,90</figcaption>
                    </li>
                    <!--fim do oitavo produto mais vendido-->
                    <li>
                        <img src="img/produtos/miniatura13.jpg">
                        <figcaption>Fuzzy Cardigan po $129,90</figcaption>
                    </li>
                    <!--fim do nono produto mais vendido-->
                    <li>
                        <img src="img/produtos/miniatura12.jpg">
                        <figcaption>Fuzzy Cardigan po $129,90</figcaption>
                    </li>
                    <!--fim do decimo produto mais vendido-->
                    <li>
                        <img src="img/produtos/miniatura11.jpg">
                        <figcaption>Fuzzy Cardigan po $129,90</figcaption>
                    </li>
                    <!--fim do 11º produto mais vendido-->
                    <li>
                        <img src="img/produtos/miniatura10.jpg">
                        <figcaption>Fuzzy Cardigan po $129,90</figcaption>
                    </li>
                    <!--fim do 12º produto mais vendido-->
                    <button type="button">Mostrar mais</button>
            </section>
            </ol>
        </div>
    </section>
    <section>
        <footer>
            <div class="container">
                <img src="img/logo-rodape.jpg" alt="Logo da Mirror Fashion">

                <ul class="social">
                    <li><a href="http://facebook.com/mirrorfashion">Facebook</a></li>
                    <li><a href="http://twitter.com/mirrorfashion">Twitter</a></li>
                    <li><a href="http://plus.google.com/mirrorfashion">Google+</a></li>
                </ul>
            </div>
        </footer>
    </section>
    <a href="#" class="pause"></a>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/banner.js"></script>
    <script type="text/javascript" src="js/home.js"></script>
</body>

</html>