<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salas de Aula</title>

    <!-- Importando fontes -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Fira+Sans">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto">

    <!-- Importando os estilos -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="../_css/exibicao_escola.css">
    <link rel="stylesheet" href="../_css/cadastro_escola.css">
</head>
<body>
  <?php include_once "../include/cadastro_turmas.php"; ?>

  <section class="agroup">
      <div class="collection-title">
        <h1 class="text-center fw-bold">Minhas Turmas</h1>
      </div>
      
      <section class="cards-collection">
          <div class="card" style="width: 18rem;">
              <div class="embed-responsive embed-responsive-1by1">
                  <img src="https://i.pinimg.com/originals/91/de/f1/91def1bcb95e3618902a9af9ed7e50ad.png" class="card-img-top" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title">1° Série A</h5>
                <a href="lista_alunos.html" class="btn btn-success">Visitar</a>
              </div>
            </div>
            <div class="card" style="width: 18rem;">
              <div class="embed-responsive embed-responsive-1by1">
                  <img src="https://i.pinimg.com/originals/91/de/f1/91def1bcb95e3618902a9af9ed7e50ad.png" class="card-img-top" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title">2° Série A</h5>
                <a href="lista_alunos.html" class="btn btn-success">Visitar</a>
              </div>
            </div>
            <div class="card" style="width: 18rem;">
              <div class="embed-responsive embed-responsive-1by1">
                  <img src="https://i.pinimg.com/originals/91/de/f1/91def1bcb95e3618902a9af9ed7e50ad.png" class="card-img-top" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title">3° Série A</h5>
                <a href="lista_alunos.html" class="btn btn-success">Visitar</a>
              </div>
            </div>
            <div class="card" style="width: 18rem;">
              <div class="embed-responsive embed-responsive-1by1">
                  <img src="https://i.pinimg.com/originals/91/de/f1/91def1bcb95e3618902a9af9ed7e50ad.png" class="card-img-top" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title">3° Série B</h5>
                <a href="lista_alunos.html" class="btn btn-success">Visitar</a>
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