<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../style2.css">

    <!--Logo e Titulo-->
    <link rel="icon" href="../Loja/100t-logo2.webp" type="image/x-icon">
    <title>Produtos</title>
</head>

<body>
    <!--Menu-->
    <div class="container">
      <ul class="nav nav-fill align-items-center font-weight-bold">
          <li>
            <a href="../Loja/Loja.html">
              <img src="../Loja/100T-logo.png" width="100px" alt="100T">
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link texto" href="../Loja/Loja.html">LOJA</a>
          </li>
          <li class="nav-item">
            <a class="nav-link texto" href="Produtos.php">PRODUTOS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link texto" href="../Times/Time.html">TIMES</a>
          </li>
          <li class="nav-item">
            <a class="nav-link texto" href="../Sobre/Sobre.html">SOBRE</a>
          </li>
          <li class="nav-item">
            <a class="nav-link texto" href="../Contato/Contato.html">CONTATO</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle texto" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              LOGIN
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item texto" href="../Login/Login.html">Área do Cliente</a>
              <a class="dropdown-item texto" href="../ADM/LoginADM.html">Área da Administração</a>
            </div>
          </li>
      </ul>
      <hr class="bg-dark">
    </div>

    <!--Loja-->
    <div class="container text-center">
        <div class="row">
        <h1 style="margin: 30px">PRODUTOS</h1>
            <?php
                require_once '../BD/conexao.php';

                $sql = "SELECT * FROM loja;";   
                $result = $conexao->query($sql);
                
                while ($row = $result->fetch_assoc()) {
                    echo'<div class="col-md-3 mb-4">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top card-custom" src="data:image/jpeg;base64,'.base64_encode($row['imagem']).'" alt="Imagem do Produto">
                                <div class="card-body">
                                    <h5 class="card-title">'.$row['nome'].'</h5>
                                    <p class="card-text">Preço: R$'.$row['preco'].'</p>
                                    <p class="card-text">Quantidade: '.$row['qnt'].'</p>
                                    <a href="https://www.amazon.com.br/Genérico-Pacoquita-50x20g-Santa-Helena/dp/B09D29RF2T/ref=asc_df_B09D29RF2T/?tag=googleshopp00-20&linkCode=df0&hvadid=586150113484&hvpos=&hvnetw=g&hvrand=18220947705233024303&hvpone=&hvptwo=&hvqmt=&hvdev=c&hvdvcmdl=&hvlocint=&hvlocphy=1001777&hvtargid=pla-2017197904537&psc=1&mcid=05f3385d8b58330ba637a6916275090b" class="btn btn-danger botao">Comprar</a>
                                </div>
                            </div>
                        </div>';
                }
            ?>
        </div>
    </div>

    <!--Rodapé-->
    <div class="container">
      <hr class="bg-dark">
      <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-4">
        <!--Coluna 1-->
        <div class="col mb-3">
          <a href="/" class="d-flex align-items-center mb-3 link-dark text-decoration-none">
            <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
          </a>
          <p class="text-dark">© 2017, 100T Ltd. Todos os direitos reservados.</p>
        </div>
        <!--Coluna 2-->
        <div class="col mb-3">
        </div>
        <!--Coluna 3-->
        <div class="col mb-3">
          <h5 class="font-weight-bold">Início</h5>
          <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="Loja.html" class="nav-link p-0 text-dark">Loja</a></li>
            <li class="nav-item mb-2"><a href="../Times/Time.html" class="nav-link p-0 text-dark">Times</a></li>
            <li class="nav-item mb-2"><a href="../Sobre/Sobre.html" class="nav-link p-0 text-dark">Sobre</a></li>
            <li class="nav-item mb-2"><a href="../Contato/Contato.html" class="nav-link p-0 text-dark">Contato</a></li>
          </ul>
        </div>
        <!--Coluna 4-->
        <div class="col mb-3">
          <h5 class="font-weight-bold">Redes Sociais</h5>
          <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="https://www.tiktok.com/@100thieves?lang=en" class="nav-link p-0 text-dark">Tiktok</a></li>
            <li class="nav-item mb-2"><a href="https://www.youtube.com/channel/UCnrX2_FoKieobtw19PiphDw" class="nav-link p-0 text-dark">Youtube</a></li>
            <li class="nav-item mb-2"><a href="https://www.instagram.com/100thieves/" class="nav-link p-0 text-dark">Instagram</a></li>
            <li class="nav-item mb-2"><a href="https://twitter.com/100Thieves" class="nav-link p-0 text-dark">Twitter</a></li>
          </ul>
        </div>
        <!--Coluna 5-->
        <div class="col mb-3">
          <h5 class="font-weight-bold">Nossas Marcas</h5>
          <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="https://100thieves.com/pages/apparel" class="nav-link p-0 text-dark">Apparel</a></li>
            <li class="nav-item mb-2"><a href="https://drinkjuvee.com" class="nav-link p-0 text-dark">Juvee</a></li>
            <li class="nav-item mb-2"><a href="https://higround.co" class="nav-link p-0 text-dark">Higround</a></li>
            <li class="nav-item mb-2"><a href="https://projectx.100thieves.com" class="nav-link p-0 text-dark">Project X</a></li>
          </ul>
        </div>
      </footer>
    </div>

  </body>
</html>