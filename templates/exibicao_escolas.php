<?php
  require_once "../_conexao_banco/conexao.php";

  if(empty($_POST["img_escola"]) || empty($_POST["nome_escola"])) {
    echo "<script>alert('Todos os campos precisam estar preenchidos!')</script>";
  } else {
    include_once "../include/upload_image.php";
    $img_escola = $imagem;
    $nome_escola = $_POST["nome_escola"];

    // Inserção de escola no banco
    $inserir_escola = "INSERT INTO escolas (img_escola ,nome_escola) VALUES ('$img_escola' ,'$nome_escola')";
    $executar_insercao_escola = mysqli_query($conecta, $inserir_escola);

    if(!$executar_insercao_escola) {
      die("[ERRO]: Erro na INSERÇÃO!");
    } else {
      echo "<script>alert('Inserção realizada com sucesso!')</script>";
    }
  }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escolas</title>

    <!-- Importando fontes -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Fira+Sans">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto">

    <!-- Importando os estilos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="../_css/exibicao_escola.css">
    <link rel="stylesheet" href="../_css/cadastro_escola.css">
    <link rel="stylesheet" href="../_css/navegacao.css">
</head>
<body>
  <?php
    include_once "../include/cadastro_escola.php";
    include_once "../include/navegacao.php";
  ?>

  <section class="agroup">
      <div class="collection-title">
        <h1 class="text-center fw-bold">Minhas Escolas</h1>
      </div>
      
      <section class="cards-collection">
          <div class="card" style="width: 18rem;">
              <div class="embed-responsive embed-responsive-1by1">
                  <img src="../images/licolina.jpg" class="card-img-top" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title">Licolina</h5>
                <a href="#" class="btn btn-success">Visitar</a>
              </div>
            </div>
            <div class="card" style="width: 18rem;">
              <div class="embed-responsive embed-responsive-1by1">
                  <img src="../images/ie_logo.jpg" class="card-img-top" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title">Manoel Bento da Cruz</h5>
                <a href="#" class="btn btn-success">Visitar</a>
              </div>
            </div>
            <div class="card" style="width: 18rem;">
              <div class="embed-responsive embed-responsive-1by1">
                  <img src="../images/licolina.jpg" class="card-img-top" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title">José Candido</h5>
                <a href="#" class="btn btn-success">Visitar</a>
              </div>
            </div>
            <div class="card" style="width: 18rem;">
              <div class="embed-responsive embed-responsive-1by1">
                  <img src="../images/etec.jpg" class="card-img-top" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title">Etec</h5>
                <a href="#" class="btn btn-success">Visitar</a>
              </div>
            </div>

            <!-- Caso não haja nenhuma escola cadastrada-->
            <div class="feedback-message">
              <div class="feedback-message-image"></div>
              <h1 class="feedback-message-title">Nenhuma escola encontrada</h1>
              <h2 class="feedback-message-subtitle">Faça o cadastro de uma escola clicando no botão com o símbolo de +</h2>
            </div>
      </section>
    </section>

    <a href="#" class="add-school btn btn-primary" onclick="document.getElementById('container-cadastro-escola').style.display='block'">
        <img src="../resources/add-icon.png" alt="">
    </a>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</body>
</html>

<?php mysqli_close($conecta); ?>