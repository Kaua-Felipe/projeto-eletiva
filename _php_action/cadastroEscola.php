<?php
  session_start();
  require_once "../_conexao_banco/conexao.php";
  
  if(empty($_FILES["img_escola"]) || empty($_POST["nome_escola"])) {
    echo "<script>alert('Todos os campos precisam estar preenchidos!')</script>";
  } else {
    include_once "../include/upload_image.php";
    $img_escola = $imagem;
    $nome_escola = $_POST["nome_escola"];
    $id_professor = $_SESSION['ID_professor'];
    // Inserção de escola no banco
    $inserir_escola = "INSERT INTO escolas (img_escola ,nome_escola, ID_professor_FK) VALUES ('$img_escola' ,'$nome_escola', '$id_professor')";
    $executar_insercao_escola = mysqli_query($conecta, $inserir_escola);

    if(!$executar_insercao_escola) {
      die("[ERRO]: Erro na INSERÇÃO!");
    } else {
      echo "<script>alert('Inserção realizada com sucesso!')</script>";
    }
  }
  header('Location: ../templates/exibicao_escolas.php');
?>