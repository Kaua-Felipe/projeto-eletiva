<?php
    include_once "../_conexao_banco/conexao.php";

    if(empty($_POST["nome_aluno"]) || empty($_POST["data_nascimento"]) || empty($_POST["numero_chamada"])) {
        // echo "<script>alert('Todos os campos precisam estar preenchidos!')</script>";
    } else {
        $nome_aluno      = $_POST["nome_aluno"];
        $data_nascimento = $_POST["data_nascimento"];
        $numero_chamada  = $_POST["numero_chamada"];
        $id_turma        = $_GET['turma'];
        $id_escola       = $_GET['escola'];

        // Inserção de aluno no banco
        $inserir_aluno   = "INSERT INTO alunos (nome_aluno, dataNascimento_aluno, numero_aluno, ID_turma_FK) VALUES ('$nome_aluno', '$data_nascimento', $numero_chamada, $id_turma)";
        $executar_insercao_aluno = mysqli_query($conecta, $inserir_aluno);

        if(!$executar_insercao_aluno) {
            die("[ERRO]: Erro na INSERÇÃO!");
        } else {
            echo "<script>alert('Inserção realizada com sucesso!')</script>";
            header("location: ../templates/lista_alunos.php?escola=$id_escola&turma=$id_turma");
        }
    }
?>