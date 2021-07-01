<?php
    require_once "../_conexao_banco/conexao.php";

    $id_escola                = $_GET["escola"];
    $excluir_escola           = "DELETE FROM escolas WHERE ID_escola = $id_escola";
    $executar_exclusao_escola = mysqli_query($conecta, $excluir_escola);

    if(!$executar_exclusao_escola) {
        die("[ERRO]: Erro na EXCLUSÃO!");
    } else {
        header("location: ../templates/exibicao_escolas.php");
    }
?>