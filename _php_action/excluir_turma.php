<?php
    require_once "../_conexao_banco/conexao.php";

    $id_turma                = $_GET["turma"];
    $id_escola               = $_GET["escola"];
    $excluir_turma           = "DELETE FROM turmas WHERE ID_turma = $id_turma";
    $executar_exclusao_turma = mysqli_query($conecta, $excluir_turma);

    if(!$executar_exclusao_turma) {
        die("[ERRO]: Erro na EXCLUSÃO!");
    } else {
        header("location: ../templates/exibicao_turmas.php?escola=$id_escola");
    }
?>