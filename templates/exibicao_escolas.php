<?php
  require_once "../_conexao_banco/conexao.php";
  session_start();

  if(!$_SESSION["logado"]) {
    header("location: cadastro_professor.php");
  } else {
    echo $_SESSION["mensagem-sucesso"];
  }

  // SELECIONAR TODAS AS ESCOLAS DO BANCO
  $id_professor = $_SESSION['ID_professor'];
  $todas_escolas = "SELECT * FROM escolas WHERE ID_professor_FK = '$id_professor'";
  $executar_selecao_escolas = mysqli_query($conecta, $todas_escolas);
  $num_escolas = mysqli_num_rows($executar_selecao_escolas);

  if(!$executar_selecao_escolas) {
    die("[ERRO]: Erro na SELEÇÃO!");
  }

  $btn_editar = '
      <svg version="1.0" xmlns="http://www.w3.org/2000/svg" 
      width="32.000000pt" 
      height="32.000000pt"
      viewBox="0 0 512.000000 512.000000" 
      preserveAspectRatio="xMidYMid meet">
      <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)"fill="#3399ff" stroke="none">
          <path d="M855 5075 c-24 -23 -25 -29 -25 -160 l0 -135 -177 0 c-208 0 -288
          -11 -361 -47 -63 -32 -139 -111 -173 -180 l-24 -48 0 -2110 0 -2110 27 -57
          c37 -79 98 -142 177 -181 l66 -32 1645 0 1645 0 63 34 c71 39 138 107 173 178
          l24 48 3 745 2 745 -140 -140 -140 -140 0 -568 0 -569 -29 -29 -29 -29 -886 0
          -886 0 -97 -32 c-134 -44 -208 -44 -294 0 l-62 32 -464 0 -465 0 -29 29 -29
          29 0 2042 0 2042 29 29 29 29 201 0 201 0 0 -95 c0 -88 2 -98 25 -120 18 -19
          35 -25 65 -25 30 0 47 6 65 25 23 22 25 32 25 120 l0 95 280 0 280 0 0 -95 c0
          -88 2 -98 25 -120 34 -35 96 -35 130 0 23 22 25 32 25 120 l0 95 245 0 245 0
          0 -95 c0 -88 2 -98 25 -120 34 -35 93 -34 129 1 24 25 26 33 26 120 l0 94 265
          0 265 0 0 -89 c0 -82 2 -92 26 -120 33 -40 89 -43 131 -7 26 23 28 29 31 120
          l4 96 220 0 220 0 29 -29 29 -29 0 -349 0 -348 140 140 141 140 -3 245 -3 245
          -28 57 c-37 75 -128 159 -204 189 -53 20 -79 23 -300 27 l-241 4 -4 135 c-3
          134 -3 135 -31 159 -40 34 -90 32 -128 -5 l-29 -29 0 -131 0 -131 -265 0 -265
          0 0 129 c0 125 -1 131 -26 160 -20 24 -34 31 -61 31 -82 0 -103 -41 -103 -205
          l0 -115 -240 0 -240 0 0 134 c0 131 -1 134 -26 160 -36 35 -95 36 -129 1 -24
          -23 -25 -29 -25 -160 l0 -135 -280 0 -280 0 0 134 c0 131 -1 134 -26 160 -36
          35 -95 36 -129 1z"/>
          <path d="M4244 3965 c-32 -16 -99 -75 -199 -175 l-150 -150 395 -395 395 -395
          157 157 c160 160 186 195 195 264 13 93 14 91 -295 402 -158 159 -299 295
          -314 303 -43 23 -127 18 -184 -11z"/>
          <path d="M979 3617 c-46 -35 -50 -88 -10 -128 l29 -29 960 0 960 0 31 26 c40
          33 43 83 6 119 l-24 25 -968 0 c-745 -1 -972 -3 -984 -13z"/>
          <path d="M3075 2820 l-680 -680 -701 0 c-786 0 -738 5 -751 -72 -5 -32 -1 -41
          25 -68 l30 -30 614 0 613 0 -187 -187 c-102 -104 -190 -197 -196 -208 -21 -41
          -332 -1033 -332 -1058 0 -27 32 -57 60 -57 8 0 249 75 535 166 l520 165 962
          962 963 962 -392 392 c-216 216 -395 393 -398 393 -3 0 -311 -306 -685 -680z
          m655 370 c12 -12 20 -33 20 -52 0 -30 -66 -99 -752 -785 -414 -414 -761 -756
          -771 -759 -51 -16 -108 47 -88 97 5 13 346 360 758 772 682 681 751 747 781
          747 19 0 40 -8 52 -20z m-1314 -2307 c-1 -2 -95 -32 -207 -68 l-204 -65 -104
          104 -103 103 61 194 c34 107 64 201 67 208 3 10 88 -68 249 -229 134 -134 243
          -245 241 -247z"/>
          <path d="M1003 2923 c-30 -6 -63 -49 -63 -83 0 -15 9 -39 21 -54 l20 -26 979
          0 979 0 20 26 c28 35 26 77 -3 111 l-24 28 -954 1 c-524 1 -963 -1 -975 -3z"/>
      </g>
    </svg>
  ';
  $btn_excluir = '
      <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
      width="32.000000pt" 
      height="32.000000pt" 
      viewBox="0 0 512.000000 512.000000"
      preserveAspectRatio="xMidYMid meet">

      <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)"
          fill="#ff3300" stroke="none">
          <path d="M2210 5101 c-155 -10 -247 -48 -373 -153 -82 -68 -132 -130 -177
          -223 -50 -103 -68 -173 -76 -300 l-7 -103 -411 -4 -411 -3 -50 -25 c-74 -37
          -91 -77 -100 -234 l-7 -126 -100 0 -101 0 7 -77 c3 -42 6 -129 6 -195 l0 -118
          195 0 c179 0 195 -1 196 -17 1 -10 5 -709 8 -1553 l6 -1535 42 -85 c70 -143
          187 -250 338 -311 l60 -24 1310 0 1310 0 60 23 c148 57 271 170 339 312 l41
          85 6 1100 c3 605 7 1304 8 1553 l1 452 193 0 194 0 6 143 c4 78 7 166 7 195
          l0 52 -98 0 -99 0 -6 121 c-8 156 -28 202 -102 239 l-50 25 -412 3 -413 4 0
          67 c0 320 -184 582 -482 688 -72 25 -77 26 -408 28 -184 2 -387 0 -450 -4z
          m778 -426 c98 -54 147 -138 158 -272 l7 -83 -587 0 -586 0 0 33 c1 182 84 312
          225 348 17 4 188 7 380 6 l350 -2 53 -30z m959 -1670 c2 -291 0 -969 -5 -1505
          l-7 -975 -22 -35 c-12 -19 -37 -46 -55 -60 -32 -25 -38 -25 -273 -31 -310 -9
          -1717 -9 -2036 0 l-245 6 -35 29 c-19 16 -43 43 -54 60 -20 30 -20 55 -28
          1525 -5 821 -6 1500 -3 1507 5 12 223 14 1383 12 l1378 -3 2 -530z"/>
          <path d="M1590 1965 l0 -1175 190 0 190 0 0 1175 0 1175 -190 0 -190 0 0
          -1175z"/>
          <path d="M2370 1965 l0 -1175 195 0 195 0 0 1175 0 1175 -195 0 -195 0 0
          -1175z"/>
          <path d="M3160 1965 l0 -1175 190 0 190 0 0 1175 0 1175 -190 0 -190 0 0
          -1175z"/>
      </g>
    </svg>
  ';
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
    <link rel="stylesheet" href="../_css/editar_escolas.css">
    <link rel="stylesheet" href="../_css/navegacao1.css">
    <link rel="stylesheet" href="../_css/rodape.css">
    <link rel="stylesheet" href="../_css/janelas_exclusao.css">

    <!-- Ícone do guia -->
    <link rel="shortcut icon" href="../resources/logotipo.png" type="image/x-icon">
</head>
<body>
  <?php
    include_once "../include/cadastro_escola.php";
    include_once "../include/navegacao.php";
    include_once "../include/confirmacao_exclusao_escola.php";
    if(isset($_GET['escola_id'])):
      include_once "../include/editar_escolas.php";
    endif;
    if(isset($_GET["escola"])) :
      echo "
        <script>
          document.querySelector('section#janela-exclusao').style.display='block'
          document.getElementsByClassName('navbar')[0].style.zIndex = '-1'
          document.getElementsByTagName('body')[0].style.overflow = 'hidden'
        </script>
      ";
    endif;
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
                <div class="container-icones">
                  <a href="?escola_id=<?php echo $dados['ID_escola']?>">
                    <div id="icone-editar"><?php echo $btn_editar?></div>
                  </a>
                  <div id="icone-excluir">
                    <a href="?escola=<?php echo $dados["ID_escola"]?>">
                      <?php echo $btn_excluir?>
                    </a>
                  </div>
                </div>
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

    <a href="#" class="add-school btn btn-primary" onclick="abrirModelo()">
        <img src="../resources/add-icon.png" alt="">
    </a>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    <script src="../_js/janelas_cadastro.js"></script>
    <script src="../_js/janelas_edicao1.js"></script>
    <script src="../_js/janelas_exclusao.js"></script>
    <script>
      // MENSAGEM DE SUCESSO DO LOGIN
      var corpoPagina = document.getElementsByTagName('body')[0]
      var msgSucesso  = document.getElementsByClassName("alert-success")[0]

      corpoPagina.addEventListener('mousemove', sairMensagemSucesso)

      function sairMensagemSucesso() {
          msgSucesso.style.opacity = "0"
      }
    </script>
</body>
</html>

<?php mysqli_close($conecta); ?>