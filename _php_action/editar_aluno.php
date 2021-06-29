<?php
    include_once "../_conexao_banco/conexao.php";

    if(empty($_POST["nome_aluno"]) || empty($_POST["data_nascimento"]) || empty($_POST["numero_chamada"])) {
        // echo "<script>alert('Todos os campos precisam estar preenchidos!')</script>";
    } else {
        $id_aluno        = $_GET["aluno_id"];
        $nome_aluno      = $_POST["nome_aluno"];
        $data_nascimento = $_POST["data_nascimento"];
        $numero_chamada  = $_POST["numero_chamada"];
        $id_turma        = $_GET['turma'];
        $id_escola       = $_GET['escola'];

        // Atualização de aluno no banco
        $atualiza_aluno   = "UPDATE alunos SET nome_aluno = '$nome_aluno', dataNascimento_aluno = '$data_nascimento', numero_aluno = '$numero_chamada', ID_turma_FK = '$id_turma' WHERE ID_aluno = '$id_aluno'";
        $executar_atualiza_aluno = mysqli_query($conecta, $atualiza_aluno);

        if(!$executar_atualiza_aluno) {
            die("[ERRO]: Erro na INSERÇÃO!");
        } else {
            echo "<script>alert('Inserção realizada com sucesso!')</script>";
            header("location: ../templates/lista_alunos.php?escola=$id_escola&turma=$id_turma");
        }
    }
?>