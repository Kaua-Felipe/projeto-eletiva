<?php
    require_once "../_conexao_banco/conexao.php";

    if(empty($_POST["nome_turma"])) {
        // echo "<script>alert('Os campos precisam ser preenchidos!')</script>";
    } else {
        $nome_turma = $_POST["nome_turma"];
        $id_escola  = $_GET['escola'];
    
        $inserir_turma = "INSERT INTO turmas (nome_turma, ID_escola_FK) VALUES ('$nome_turma','$id_escola')";
        $executar_insercao_turma = mysqli_query($conecta, $inserir_turma);
    
        if(!$executar_insercao_turma) {
          die("[ERRO]: Erro na INSERÇÃO!");
        } else {
          echo "<script>alert('Inserção de TURMA realizada com sucesso!')</script>";
          header("location: ../templates/exibicao_turmas.php?escola=$id_escola");
        }
    }
?>