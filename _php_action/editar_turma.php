<?php
    require_once "../_conexao_banco/conexao.php";

    if(empty($_POST["nome_turma"])) {
        // echo "<script>alert('Os campos precisam ser preenchidos!')</script>";
    } else {
        $nome_turma = $_POST["nome_turma"];
        $id_escola  = $_GET['escola'];
        $id_turma   = $_GET['turma_id'];
    
        $atualiza_turma = "UPDATE turmas SET nome_turma = '$nome_turma' WHERE ID_turma = '$id_turma'";
        $executar_atualiza_turma = mysqli_query($conecta, $atualiza_turma);
    
        if(!$executar_atualiza_turma) {
          die("[ERRO]: Erro na INSERÇÃO!");
        } else {
          echo "<script>alert('Atualização de TURMA realizada com sucesso!')</script>";
          header("location: ../templates/exibicao_turmas.php?escola=$id_escola");
        }
    }
?>