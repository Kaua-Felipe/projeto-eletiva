<?php
    require_once "../_conexao_banco/conexao.php";
    session_start();

    if(empty($_POST["nome_usuario"]) || empty($_POST["senha"])) {
        echo "<script>alert('[ERRO]')</script>";
        header("location: ../templates/cadastro_professor.php");
    } else {
        $nome_usuario  = $_POST["nome_usuario"];
        $senha_usuario = $_POST["senha"];

        $sql        = "SELECT * FROM professores WHERE usuario = '{$nome_usuario}'";
        $resultado  = mysqli_query($conecta, $sql);
        $dados      = mysqli_fetch_assoc($resultado);

        if(mysqli_num_rows($resultado) == 1) {
            if($dados) {
                $sql_senha = "SELECT * FROM professores WHERE usuario = '{$nome_usuario}' AND senha = '$senha_usuario'";
                $resultado_senha = mysqli_query($conecta, $sql_senha);
                $dados_senha = mysqli_fetch_assoc($resultado_senha);

                if($senha_usuario == $dados_senha['senha']) {
                    $_SESSION['logado'] = true;
                    $_SESSION['ID_professor'] = $dados['ID_professor'];
                    $_SESSION["mensagem-sucesso"] = "
                        <div class='alert alert-success' role='alert' style='z-index: 2; border: solid green 1px; position: absolute; top: 1%; right: 40%; width: 20%; border-radius: 5px;'>
                            Você foi logado com sucesso!
                        </div>
                    ";
                    header("location: ../templates/exibicao_escolas.php");
                    exit();
                } else {
                    echo "<script>alert('Senha Inválida')</script>";
                    header("location: ../templates/cadastro_professor.php");
                    exit();
                }
                /*if(password_verify($senha_usuario, $dados['senha'])) {
                    $_SESSION["logado"]     = true;
                    $_SESSION['id_usuario'] = $dados['id_user'];
                    header("location: ../templates/exibicao_escolas.php");
                } else {
                    echo "Senha Inválida!";
                }*/
            }
        } else {
            echo "Não há nenhuma conta encontrada, coloque uma conta que exista!";
        }
    }

    mysqli_close($conecta);
?>