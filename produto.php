
        <?php $conexao = mysqli_connect('0.0.0.0', 'root', '', 'WD43');
              $dados = mysqli_query($conexao, 'SELECT * FROM produtos WHERE id = '. $_GET['id']);
              $produto = mysqli_fetch_array($dados);
              $cabecalho_title = $produto['nome'] ;
        ?>

        <?php include('cabecalho.php')?>
    <div class="produto-black">

        <div class="container">
            
            <div class="produto">
                <h1><?= $produto['nome']?></h1>
                <p>por apenas <?= $produto['preco']?></p>
                <form action ='checkout.php' method='POST'>
                    
                    <input type='hidden' name='nome' value='Fuzzy Cardigan'>
                    <input type='hidden' name='preco' value='129,'>
                    <input type='hidden' name='id' value='<?= $produto['id'] ?>'>
                    
                    <fieldset class="cores">
                        <legend>Escolha a cor:</legend>
                        <input type="radio" name="cor" value="verde" id="verde" checked>
                        <label for="verde">
                            <img src="img/produtos/foto<?= $produto['id'] ?>-verde.png" alt="Produto na cor verde">
                        </label>
                        <input type="radio" name="cor" value="rosa" id="rosa">
                        <label for="rosa">
                            <img src="img/produtos/foto<?= $produto['id'] ?>-rosa.png" alt="Produto na cor rosa">
                        </label>
                        <input type="radio" name="cor" value="azul" id="azul">
                        <label for='azul'>
                            <img src="img/produtos/foto<?= $produto['id'] ?>-azul.png" alt="Produto na cor azul">
                        </label>
                    </fieldset>
                    <fieldset class="tamanhos">
                        <legend>Escolha o tamanho</legend>
                        <input type="range" min="36" max="46" value="42" step="2" name="tamanho" id="tamanho">
                        <output for="tamanho" name="valortamanho">42</output>
                    </fieldset>
                    <button class="comprar">Comprar
                            
                    </button>
                </form>
            </div>
            <div class="detalhes">
                <h2>Detalhes do produto</h2>
                <p><?= $produto['descricao'] ?></p>
                <table>
                    <thead>
                        <tr>
                            <th>Caracteristicas</th>
                            <th>Detalhe</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Modelo</td>
                            <td>Cardigã</td>
                        </tr>
                        <tr>
                            <td>Material</td>
                            <td>Algodão e poliester</td>
                        </tr>
                        <tr>
                            <td>Cores</td>
                            <td>Azul, rosa e verde</td>
                        </tr>
                        <tr>
                            <td>Lavagem</td>
                            <td>Lavar a mão</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>   
    <script type="text/javascript" src="js/produto.js"></script>
</body>

</html>

        <?php include('rodape.php') ?>