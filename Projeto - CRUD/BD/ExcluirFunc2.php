<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../style3.css">

            <!--Logo e Titulo-->
    <link rel="icon" href="../Loja/100t-logo2.webp" type="image/x-icon">
    <title>Excluir</title>
</head>

<body>
    <!--Menu-->
    <div class="container">
        <ul class="nav nav-fill align-items-center font-weight-bold">
            <li>
                <a href="../ADM/Home.html">
                <img src="../Loja/100T-logo.png" width="100px">
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link texto" href="../ADM/Pesquisar.html">PESQUISAR</a>
            </li>
            <li class="nav-item">
                <a class="nav-link texto" href="../ADM/Cadastrar.html">CADASTRAR</a>
            </li>
            <li class="nav-item">
                <a class="nav-link texto" href="Consultar.php">CONSULTAR</a>
            </li>
            <li class="nav-item">
                <a class="nav-link texto" href="../ADM/Atualizar.html">ALTERAR</a>
            </li>
            <li class="nav-item">
                <a class="nav-link texto" href="../ADM/Excluir.html">EXCLUIR</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle texto" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                OPÇÕES
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item texto" href="../ADM/Home.html">Início</a>
                <a class="dropdown-item texto" href="../Loja/Loja.html">Sair</a>
                </div>
            </li>
        </ul>
        <hr class="bg-dark">
    </div>

    <?php
    //Conexão com o Banco
    require_once 'conexao.php';

    //Recebendo o ID e Deleta os Dados
    $id = $_POST['id'];
    $sql = "DELETE FROM adm WHERE id = '$id'";
    $result = $conexao->query($sql);

    //Retorna uma Mensagem de Sucesso quando os Dados são Excluídos com Êxito
    if ($result) {
        echo '<br><br><div class="container" style="margin-top: 200px; margin-bottom: 200px;">
              <h1>Dados Excluídos com Sucesso!!!</h1>
              <a href="../ADM/Excluir.html"><button class="btn btn-danger">Voltar</button></a>
              </div>';
    //Caso tenha dado alguma erro na exclusão  
    }else {
        echo '<br><br><div class="container" style="margin-top: 200px; margin-bottom: 200px;">
              <h1>Erro ao excluir dados. Por favor, tente novamente.</h1>
              <a href="../ADM/Excluir.html"><button class="btn btn-danger">Voltar</button></a>
              </div>';
    }
  ?>

  <!--Rodapé-->
  <div class="container">
    <br>
    <hr>
    <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-4">
      <!--Coluna 1-->
      <div class="col mb-3">
        <a href="/" class="d-flex align-items-center mb-3 link-dark text-decoration-none">
          <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
        </a>
        <p class="text-dark">© 2017, 100T Ltd. Todos os direitos reservados.</p>
      </div>
      <!--Coluna 2-->
      <div class="col mb-3"></div>
      <!--Coluna 3-->
      <div class="col mb-3">
        <h5 class="font-weight-bold">Início</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="../Loja/Loja.html" class="nav-link p-0 text-dark">Loja</a></li>
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