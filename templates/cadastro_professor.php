<?php
    require_once "../_conexao_banco/conexao.php";

    if(empty($_POST["nome_usuario"]) || empty($_POST["senha_usuario"]) || empty($_POST["confirmacao_senha"])) {
        //echo "<script>alert('Todos os campos precisam estar preenchidos!')</script>";
    } else {
        $nome_usuario  = $_POST["nome_usuario"];
        $senha_usuario = $_POST["senha_usuario"];
        $confirmacao_senha = $_POST["confirmacao_senha"];

        if(strval($senha_usuario) === strval($confirmacao_senha)) {
            // Faz a inclusão de professor na tabela professores no banco de dados
            $inserir_professor = "INSERT INTO professores (usuario, senha) VALUES ('$nome_usuario', '$senha_usuario')";
            $executar_insercao = mysqli_query($conecta, $inserir_professor);
            if(!$executar_insercao) {
                die("[ERRO]: Erro na INSERÇÃO!");
            } else {
                echo "<script>alert('Cadastro realizado com sucesso!')</script>";
            }
        } else {
            echo "
                <div class='alert alert-danger' role='alert' style='position: absolute; top: 40%; right: 40%; width: 20%; border-radius: 5px;'>
                    [ERRO]: As senhas devem ser iguais para realizar o cadastro!
                </div>
            ";
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro e Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <link rel="stylesheet" href="../_css/cadastro_professorr.css">
</head>
<body>
    <div class="container">
        <form action="../_php_action/login.php" method="post">
            <h3>Login</h3>

            <label for="nome_usuario">Usuário</label>
            <input type="text" name="nome_usuario" id="nome_usuario" placeholder="Insira nome de usuário" required>

            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha" placeholder="Insira a sua senha" required><br><br><br><br>

            <input type="submit" value="LOGAR">
        </form>

        <div class="linha-vertical"></div>
    
        <form action="cadastro_professor.php" method="post">
            <h3>Cadastro do Professor</h3>

            <label for="nome_usuario">Nome de Usuário</label>
            <input type="text" name="nome_usuario" id="nome_usuario" placeholder="Insira um nome de usuário" required>

            <label for="senha_usuario">Senha</label>
            <input type="password" name="senha_usuario" id="senha_usuario" placeholder="Insira uma senha" required>

            <label for="confirmacao_senha">Confirmar Senha</label>
            <input type="password" name="confirmacao_senha" id="confirmacao_senha" placeholder="Confirmar Senha" required><br>

            <input type="submit" value="ENVIAR">
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</body>
</html>

<?php mysqli_close($conecta); ?>