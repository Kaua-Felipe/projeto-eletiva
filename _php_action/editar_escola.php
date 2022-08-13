<?php
  session_start();
  require_once "../_conexao_banco/conexao.php";

  if(empty($_FILES["img_escola"]) || empty($_POST["nome_escola"])) {
    echo "<script>alert('Todos os campos precisam estar preenchidos!')</script>";
  } else {
    include_once "../include/upload_image.php";
    $id_escola = $_GET['escola_id'];
    if(!$imagem):
      $select_img = "SELECT img_escola FROM escolas WHERE ID_escola = $id_escola";
      $executar_select_img = mysqli_query($conecta, $select_img);
      $img_escola = mysqli_fetch_assoc($executar_select_img)['img_escola'];
      print_r('img: '.$img_escola);
    else:
      $img_escola = $imagem;
    endif;
    $nome_escola = $_POST["nome_escola"];
    // Atualização de escola no banco
    $atualiza_escola = "UPDATE escolas SET img_escola = '$img_escola',nome_escola = '$nome_escola' WHERE ID_escola = '$id_escola'";
    $executar_atualiza_escola = mysqli_query($conecta, $atualiza_escola);

    if(!$executar_atualiza_escola) {
      die("[ERRO]: Erro na ATUALIZAÇÃO!");
    } else {
      echo "<script>alert('Atualização realizada com sucesso!')</script>";
    }
  }
  header("Location: ../templates/exibicao_escolas.php");
?>