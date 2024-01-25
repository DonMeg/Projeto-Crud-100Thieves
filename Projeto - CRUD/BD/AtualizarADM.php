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
  <title>Atualizar</title>   
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
    require_once 'conexao.php';
        
    $id = $_POST['id'];
    $sql = ("SELECT * FROM adm WHERE id = '$id'") or die(mysqli_error($conexao));
    $result = $conexao->query($sql);

    $id_cont = $result->num_rows;

    if($id_cont != 1){
      echo "<div class='container text-center'>
            <h1 style='margin: 200px;'>ID Inválido!</h1>
            </div>";
            $footerHTML = '
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
            ';
            
            echo $footerHTML;
      die();
    }elseif($result->num_rows>0){
        $dados=$result->fetch_assoc();
        $nome=$dados['nome'];
        $email=$dados['email'];
        $senha=$dados['senha'];
        $id=$dados['id'];
    }
  ?>

    <div class="container">
        <h1>Dados do Funcionário</h1>
        <div class="mb-3">
            <form method="post" action="AtualizarADM2.php" enctype="multipart/form-data">
                <div class="row-6">
                    <label for="exampleFormControlInput1" class="form-label"><strong>ID</strong></label>
                    <input readonly type="number" class="form-control" id="exampleFormControlInput1" name="id" value="<?php echo $id ?>">
                </div>
                <div class="row-6">
                    <label for="exampleFormControlInput1" class="form-label"><strong>Nome do Funcionário</strong></label>
                    <input required type="text" class="form-control" id="exampleFormControlInput1" name="nome" placeholder="Digite o Nome do Funcionário" value="<?php echo $nome?>">
                </div>
                <div class="row-6">
                    <label for="exampleFormControlInput1" class="form-label"><strong>E-mail do Funcionário</strong></label>
                    <input required type="email" class="form-control" id="exampleFormControlInput1" name="email" placeholder="Digite o E-mail do Funcionário" value="<?php echo $email?>">
                </div>
                <div class="row-6">
                    <label for="exampleFormControlInput1" class="form-label"><strong>Senha do Funcionário</strong></label>
                    <input required type="text" class="form-control" id="exampleFormControlInput1" name="senha" placeholder="Digite a Senha do Funcionário" value="<?php echo $senha?>">
                </div>
                <br>
                <button class="btn btn-danger">Atualizar</button>
            </form>
        </div>
    </div>

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