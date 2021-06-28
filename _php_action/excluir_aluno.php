<?php
    require_once "../_conexao_banco/conexao.php";

    $id_aluno        = $_GET["aluno_id"];
    $excluir_aluno   = "DELETE FROM alunos WHERE ";
?>