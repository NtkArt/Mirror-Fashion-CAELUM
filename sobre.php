<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Sobre a Mirror Fashion</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/sobre.css">
</head>

<body>
<?php include('cabecalho.php'); ?>

    <img src="img/logo.jpg" alt="Logo da Mirror Fashion">
    <h1>A Mirror Fashion</h1>
    <article>
        <p>A <strong>Mirror Fashion</strong> é a maior empresa comércio eletrônico no segmento de moda em todo o mundo. Fundada
            há <?php print date('Y') - 1932; ?> anos, possui filiais em 124 países, sendo líder de mercado com mais de 90% de participação em 118 deles.</p>
        <p class="local">Nosso centro de distribuição fica em <a class="local" href="https://maps.google.com.br/?q=Jacarezinho" target="-blank">Jacarezinho,
                no Paraná.</a> De lá, saem 48 aviões que distribuem nossos produtos às casas do mundo todo. Nosso centro
            de distribuição:</p>
        <figure>
            <img src="img/centro-distribuicao.png" alt='Foto do centro de distribuição da Mirror Fashion'>
            <figcaption>Centro de Distribuição da Mirror Fashion</figcaption>
        </figure>
        <p>Compre suas roupas e acessórios na Mirror Fashion. Acesse <a href="index.html" target="-blank">nossa loja</a>
            ou entre em contato se tiver dúvidas. Conheça também nossa <a href="#historia">historia</a> e nossos <a href="#diferenciais">diferenciais</a></p>
        <h2 id="historia">História</h2>
        <figure>
            <img src="img/familia-pelho.jpg" alt='Foto da Família Pelho'>
            <figcaption>Foto da Família Pelho</figcaption>
        </figure>
        <p>
            A fundação em 1932 ocorreu no momento da descoberta econônica do interior do Paraná. A família <em>Pelho</em>,
            tradicional da região, investiu todas as suas economias nessa nova iniciativa, revolucionária para a época. O
            fundador <em>Eduardo Simões Pelho</em>, dotado de particular visão administrativa, guiou os negócios da empresa
            durante mais de 50 anos, muitos deles ao lado de seu filho <em>E. S. Pelho Filho</em>, atual CEO. O nome da empresa
            é inspirado no nome da família.</p>
        <p>
            O crescimento da empresa foi praticamente instantâneo. Nos primeiros 5 anos, já atendia 18 países. Bateu a marca de 100 países
            em apenas 15 anos de existência. Até hoje, já atendeu 740 milhões de usuários diferentes, em bilhões de diferentes
            pedidos.</p>
        <p>
            Dada a importância econômica da empresa para o Brasil, a família Pelho já recebeu diversos prêmios, homenagens e condecorações.
            Todos os presidentes do Brasil já visitaram as instalações da Mirror Fashion, além de presidentes da União Européia,
            Ásia e o secretário-geral da ONU.</p>
        <h2 id="diferenciais"><strong>Diferenciais</strong></h2>
        <ul>
            <li>Menor preço do varejo, garantido!</li>
            <li>Se você achar uma loja mais barata, leva o produto de graça</li>
            <li>Pague em reais, dólares, euros ou bitcoins</li>
            <li>Todas as compras com frete grátis para o mundo todo</li>
            <li>Maior comércio eletrônico de moda do mundo</li>
            <li>Atendimento via telefone, email, chat, twitter, facebook, carta, fax e telegrama</li>
            <li>Presente em 124 países</li>
            <li>Mais de um milhão de funcionários em todo o mundo</li>
        </ul>
    </article>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/sobre.js"></script>

    <h2>Veja um video <b>sobre</b> a nossa empresa </h2>
    <div class="video">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Video
          </button>

    </div>
    <div class="modal" tabindex="-1" role="dialog" id="exampleModal">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Empresa Mirror Fashion</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/Tb06abHE4hY" frameborder="0" allow="autoplay; encrypted-media"
                allowfullscreen></iframe>
            </div>
            
          </div>
        </div>
      </div>
                    
                    <?php include('rodape.php'); ?>
</body>

</html>