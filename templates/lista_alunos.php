<?php
    require_once "../_conexao_banco/conexao.php";
    session_start();

    if(!$_SESSION["logado"]) {
        header("location: cadastro_professor.php");
    }

    // SELECIONAR TODOS OS ALUNOS DO BANCO
    $todos_alunos = "SELECT * FROM alunos";
    $executar_selecao_alunos = mysqli_query($conecta, $todos_alunos);
    $num_alunos = mysqli_num_rows($executar_selecao_alunos);

    if(!$executar_selecao_alunos) {
        die("[ERRO]: Erro na SELEÇÃO de alunos!");
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salas de Aula</title>

    <!-- Importando fontes -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Fira+Sans">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto">

    <!-- Importando os estilos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <link rel="stylesheet" href="../_css/lista_alunos.css">
    <link rel="stylesheet" href="../_css/navegacao.css">
    <link rel="stylesheet" href="../_css/cadastro_escola.css">
</head>
<body>
    <?php
        include_once "../include/navegacao.php";
        include_once "../include/cadastro_alunos.php";
    ?>

    <nav>
        <div class="paginacao-links">
            <a href="exibicao_escolas.php">Escolas</a>
            <span> > </span>
            <a href="exibicao_turmas.php" id="last-link">Turmas</a>
            <span> > </span>
            <span>Listagem dos Alunos</span>
        </div>
        <div></div>
    </nav>

    <main>
        <?php
            if($num_alunos > 0) {
        ?>
                <table class="table table-dark table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Nome Completo</th>
                            <th scope="col">Data Nascimento</th>
                            <th scope="col">Número de Chamada</th>
                            <th scope="col">Escola</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            while($dados = mysqli_fetch_assoc($executar_selecao_alunos)) :
                        ?>
                            <tr>
                                <th scope="row"><?php echo $dados["nome_aluno"] ?></th>
                                <td><?php echo $dados["dataNascimento_aluno"] ?></td>
                                <td><?php echo $dados["numero_aluno"] ?></td>
                                <td>Manoel Bento da Cruz</a></td>
                            </tr>
                        <?php
                            endwhile;
                        ?>
                    </tbody>
                </table>
        <?php
            } else{
        ?>
                <!-- Caso não haja nenhuma escola cadastrada-->
                <div class="feedback-message">
                    <div class="feedback-message-image"></div>
                    <h1 class="feedback-message-title">Nenhum(a) aluno(a) encontrado(a)</h1>
                    <h2 class="feedback-message-subtitle">Faça o cadastro de um(a) aluno(a) clicando no botão com o símbolo de +</h2>
                </div>
        <?php
            }
        ?>
    </main>

    <a href="#" class="add-school btn btn-primary" onclick="document.getElementById('container-cadastro-escola').style.display='block'">
        <img src="../resources/add-icon.png" alt="">
    </a>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</body>
</html>

<?php mysqli_close($conecta); ?>