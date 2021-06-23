<?php
    require_once "../_conexao_banco/conexao.php";
    session_start();

    if(!$_SESSION["logado"]) {
        header("location: cadastro_professor.php");
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salas de Aula</title>

    <!-- Importando os estilos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="_css/resultado.css">
    <link rel="stylesheet" href="../_css/navegacao.css">
</head>
<body>
    <?php include_once "../include/navegacao.php"; ?>

    <table class="table table-dark table-hover">
        <thead>
            <tr>
                <th scope="col">Nome Completo</th>
                <th scope="col">Idade</th>
                <th scope="col">Data</th>
                <th scope="col">Escola</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">José Henrique Ioki Yamaoki</th>
                <td>17</td>
                <td>17/04/2004</td>
                <td>Manoel Bento da Cruz</a></td>
            </tr>
            <tr>
                <th scope="row">Kauã Felipe Alves</th>
                <td>16</td>
                <td>xx/06/2004</td>
                <td>Manoel Bento da Cruz</td>
            </tr>
        </tbody>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</body>
</html>

<?php mysqli_close($conecta); ?>