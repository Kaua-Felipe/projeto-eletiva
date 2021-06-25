<?php
  require_once "../_conexao_banco/conexao.php";
  session_start();

  if(!$_SESSION["logado"]) {
    header("location: cadastro_professor.php");
  }
  // SELECIONAR TODAS AS ESCOLAS DO BANCO
  $id_professor = $_SESSION['ID_professor'];
  $todas_escolas = "SELECT * FROM escolas WHERE ID_professor_FK = '$id_professor'";
  $executar_selecao_escolas = mysqli_query($conecta, $todas_escolas);
  $num_escolas = mysqli_num_rows($executar_selecao_escolas);

  if(!$executar_selecao_escolas) {
    die("[ERRO]: Erro na SELEÇÃO!");
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
    <link rel="stylesheet" href="../_css/exibicao_escolas.css">
    <link rel="stylesheet" href="../_css/cadastro_escola.css">
    <link rel="stylesheet" href="../_css/navegacao1.css">
    <link rel="stylesheet" href="../_css/rodape.css">
</head>
<body>
  <?php
    include_once "../include/cadastro_escola.php";
    include_once "../include/navegacao.php";
  ?>

  <nav>
    <div class="paginacao-links">
      <span style="margin-left: 0;"> Escolas </span>
    </div>
    <div></div>
  </nav>

  <section class="agroup">
      <div class="collection-title">
        <h1 class="text-center fw-bold">Minhas Escolas</h1>
      </div>
      
      <section class="cards-collection">
        <?php
          if($num_escolas > 0) {
            while($dados = mysqli_fetch_assoc($executar_selecao_escolas)) :
        ?>
            <div class="card" style="width: 18rem;">
              <div class="embed-responsive embed-responsive-1by1">
                  <img src="../images/<?php echo $dados['img_escola']; ?>" class="card-img-top" height="286">
              </div>
              <div class="card-body">
                <h5 class="card-title"><?php echo $dados["nome_escola"] ?></h5>
                <a href="exibicao_turmas.php?escola=<?php echo $dados['ID_escola']?>" class="btn btn-success">Visitar</a>
              </div>
            </div>
        <?php
            endwhile;
          } else {
        ?>    
              <!-- Caso não haja nenhuma escola cadastrada-->
              <div class="feedback-message">
                <div class="feedback-message-image"></div>
                <h1 class="feedback-message-title">Nenhuma escola encontrada</h1>
                <h2 class="feedback-message-subtitle">Faça o cadastro de uma escola clicando no botão com o símbolo de +</h2>
              </div>
        <?php
          }
        ?>
      </section>
    </section>

    <?php include_once "../include/rodape.php"; ?>

    <a href="#" class="add-school btn btn-primary" onclick="document.getElementById('container-cadastro-escola').style.display='block'">
        <img src="../resources/add-icon.png" alt="">
    </a>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</body>
</html>

<?php mysqli_close($conecta); ?>