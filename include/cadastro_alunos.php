<section id="container-cadastro-escola">
    <form action="../_php_action/cadastro_aluno.php?escola=<?php echo $_GET['escola']?>&turma=<?php echo $_GET['turma']?>" method="post" class="modal-content animate">
        <h3>Adicionar Aluno(a)</h3>
        <div class="container-campos">
            <p>
                <img src="../resources/img_cadastro_aluno.png" id="img" width="100%" height="300">
                <label for="nome_aluno">Nome do Aluno(a)</label>
                <input type="text" name="nome_aluno" id="nome_aluno" placeholder="Informe o nome do(a) aluno(a)" required>
            </p>
            <p>
                <label for="data_nascimento">Data Nascimento</label>
                <input type="date" name="data_nascimento" id="data_nascimento" placeholder="Informe a data de nascimento do(a) aluno(a)" required>
            </p>
            <p>
                <label for="numero_chamada">Número de Chamada</label>
                <input type="number" name="numero_chamada" id="numero_chamada" placeholder="Informe o número de chamada do(a) aluno(a)" required>
            </p>
            <p>
                <input type="submit" value="ENVIAR">
            </p>
        </div>
        
        <div class="container-rodape">
            <button type="button" onclick="sairModelo()" class="cancelbtn">Cancelar</button>
        </div>
    </form>
</section>