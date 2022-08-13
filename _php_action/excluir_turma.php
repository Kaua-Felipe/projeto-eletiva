<?php
    require_once "../_conexao_banco/conexao.php";

    $id_turma                = $_GET["turma"];
    $id_escola               = $_GET["escola"];
    $excluir_alunos_turma    = "DELETE FROM alunos WHERE ID_turma_FK = $id_turma";
    $executar_exclusao_todos_alunos = mysqli_query($conecta, $excluir_alunos_turma);

    if(!$executar_exclusao_todos_alunos) {
        die("[ERRO]: Erro na EXCLUSÃO dos alunos!");
    } else {
        $excluir_turma = "DELETE FROM turmas WHERE ID_turma = $id_turma";
        $executar_exclusao_turma = mysqli_query($conecta, $excluir_turma);
        if(!$executar_exclusao_turma) {
            die("[ERRO]: Erro na EXCLUSÃO da turma!");
        } else {
            header("location: ../templates/exibicao_turmas.php?escola=$id_escola");
        }
    }
?>