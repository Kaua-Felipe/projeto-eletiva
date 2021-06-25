<section id="container-cadastro-escola">
    <form action="../_php_action/cadastro_aluno.php?escola=<?php echo $_GET['escola']?>&turma=<?php echo $_GET['turma']?>" method="post" class="modal-content animate">
        <h3>Adicionar Aluno(a)</h3>
        <div class="container-campos">
            <p>
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
            <button type="button" onclick="document.getElementById('container-cadastro-escola').style.display='none'" class="cancelbtn">Cancelar</button>
        </div>
    </form>
</section>

<script>
    // Get the modal
    var modal = document.getElementById('container-cadastro-escola');
    
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if(event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>