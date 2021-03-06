<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>Checkout Mirror Fashion</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
        crossorigin="anonymous">

    <style>
        #cpf::-webkit-outer-spin-button,
        #cpf::-webkit-inner-spin-button {
            /* display: none; <- Crashes Chrome on hover */
            -webkit-appearance: none;
            margin: 0;
            /* <-- Apparently some margin are still there even though it's hidden */
        }

        #cpf {
            -moz-appearance: textfield;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="index.html">Mirror Fashion</a>
        <div class="collapse navbar-collapse" id="navbarToggleExternalContent">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="sobre.html">Sobre</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Ajuda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">F.A.Q</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contato</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <div class="row">

                <div class="card-md-4 col-xl-3">
                    <div class="card mb-3">

                    </div>
                </div>
            </div>
            <h1 class="display-4">Ótima escolha!</h1>
            <p class="lead">Obrigado por comprar na Mirror Fashion! Preencha seus dados para efetivar a compra.</p>

        </div>
        <!--fim .container dentro do jumbotron-->
    </div>
    <!--fim .jumbotron-->
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-3">
                    <div class="card-header">
                        <h2>Sua compra</h2>
                    </div>
                    <!--fim .card-header -->
                    <div class="card-body">
                        <img src="img/produtos/foto1-verde.png" alt="Fuzzy Cardigan" class="img-thumbnail mb-3 d-none d-sm-block">
                        <dl>
                            <dt>Produto</dt>
                            <dd><?= $_POST['nome']?></dd>

                            <dt>Cor</dt>
                            <dd><?=$_POST['cor']?></dd>

                            <dt>Tamanho</dt>
                            <dd><?= $_POST['tamanho']?></dd>


                            <dt>Preço</dt>
                            <dd id="preco"><?=$_POST['preco']?></dd>
                        </dl>
                    </div>
                    <!--fim .card-body-->
                </div>
                <!--fim .card mb 3-->
                <div class="card mb-3">
                    <div class="card-body">

                        <div class="form-group">
                            <label for="qtd">Quantidade</label>
                            <input type="number" id="qtd" min="1" max="999" value="1" class="form-control">

                        </div>

                        <div class="form-group">
                            <label for="total">Total:</label>
                            <output for="qtd preco" id="total" class="form-control">R$ 129,90</output>
                        </div>

                    </div>
                </div>
            </div>
            <!--fim .container da pag-->


            <form class="col-md-8">
                <div class="row">
                    <fieldset class="col-lg-6">
                        <legend>Dados Pessoais</legend>

                        <div class="form-group">
                            <label for="nome">Nome Completo</label>
                            <input type="text" class="form-control" id="nome" name="nome" placeholder="Steve Jobs da Silva" required>
                        </div>
                        <!--fim form group  nomes-->
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="email@exemplo.com">
                        </div>
                        <!--fim form group email-->
                        <div class="form-group">
                            <label for="cpf">CPF</label>
                            <input type="text" class="form-control" id="cpf" name="cpf" placeholder="000.000.000-00" data-mask="999.999.999-99" required>

                        </div>
                        <!--fim form group CPF-->
                        <div class="form-group custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="newsletter" value="sim" checked>
                            <label class="custom-control-label" for="newsletter">
                                Quero receber Newsletter da Mirror Fashion
                            </label>
                        </div>
                    </fieldset>
                    <!--fim .form-group 1-->
                    <fieldset class="col-lg-6">

                        <legend>Cartão de Crédito</legend>

                        <div class="form-group">
                            <label for="bandeira-cartao">Numero do Cartão</label>
                            <input type="text" class="form-control" id="numero-cartao" name="numero-cartao"  data-mask="9999 9999 9999"   required>
                        </div>
                        <div class="form-group">
                            <label for="bandeira-catao">Bandeira</label>
                            <select class="custom-select" id="bandeira-cartao">
                                <option disabled selected>Selecione uma opção...</option>
                                <option value="master">MasterCard</option>
                                <option value="visa">VISA</option>
                                <option value="amex">American Express</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="validade-cartao">Validade</label>
                            <input type="month" class="form-control" id="validade-cartao" name="validade-cartao">
                        </div>
                        <button type="submit" class="btn btn-primary" class="btn-lg">
                            <span class="fas fa-shopping-cart"></span>
                            Mandar para o carrinho
                        </button>
                    </fieldset>
                </div>
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/total.js"></script>
    <script type="text/javascript" src="js/inputmask-plugin.js"></script>
</body> 

</html>