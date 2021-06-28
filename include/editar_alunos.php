<?php
    if(isset($_GET["aluno_id"])):
        $id_aluno = $_GET["aluno_id"];
        $aluno = "SELECT * FROM alunos WHERE ID_aluno = $id_aluno";
        $executar_selecao_aluno = mysqli_query($conecta, $aluno);
        $dados_aluno = mysqli_fetch_assoc($executar_selecao_aluno);
    endif;
?>
<section id="container-editar-aluno">
    <form action="../_php_action/editar_aluno.php?aluno_id=<?php echo $id_aluno; ?>&escola=<?php echo $_GET['escola']?>&turma=<?php echo $_GET['turma']?>" method="post" class="modal-content animate">
        <h3>Editar Aluno(a)</h3>
        <div class="container-campos">
            <p>
                <img src="../resources/img_cadastro_aluno.png" id="img" width="100%" height="300">
                <label for="nome_aluno">Nome do Aluno(a)</label>
                <input type="text" name="nome_aluno" id="nome_aluno" placeholder="Informe o nome do(a) aluno(a)" value="<?php echo $dados_aluno['nome_aluno']?>" required>
            </p>
            <p>
                <label for="data_nascimento">Data Nascimento</label>
                <input type="date" name="data_nascimento" id="data_nascimento" placeholder="Informe a data de nascimento do(a) aluno(a)" value="<?php echo $dados_aluno['dataNascimento_aluno']?>" required>
            </p>
            <p>
                <label for="numero_chamada">Número de Chamada</label>
                <input type="number" name="numero_chamada" id="numero_chamada" placeholder="Informe o número de chamada do(a) aluno(a)" value="<?php echo $dados_aluno['numero_aluno']?>" required>
            </p>
            <p>
                <input type="submit" value="ENVIAR">
            </p>
        </div>
        
        <div class="container-rodape">
            <button type="button" class="cancelbtn" id="btn-cancelar-edicao">Cancelar</button>
        </div>
    </form>
</section>