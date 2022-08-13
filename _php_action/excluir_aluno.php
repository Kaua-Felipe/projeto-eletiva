<?php
    require_once "../_conexao_banco/conexao.php";

    $id_aluno                = $_GET["deletar_aluno"];
    $id_turma                = $_GET['turma'];
    $id_escola               = $_GET['escola'];
    $excluir_aluno           = "DELETE FROM alunos WHERE ID_aluno = $id_aluno";
    $executar_exclusao_aluno = mysqli_query($conecta, $excluir_aluno);

    if(!$executar_exclusao_aluno) {
        die("[ERRO]: Erro na EXCLUSÃO!");
    } else {
        header("location: ../templates/lista_alunos.php?escola=$id_escola&turma=$id_turma");
    }
?>