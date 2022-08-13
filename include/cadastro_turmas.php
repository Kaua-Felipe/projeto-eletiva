<section id="container-cadastro-escola">
    <form action="../_php_action/cadastro_turmas.php?escola=<?php echo $_GET['escola']?>" method="post" class="modal-content animate">
        <h3>Adicionar Turma</h3>
        <div class="container-campos">
            <p>
                <img src="../resources/img_cadastro_turma.png" id="img" width="100%" height="300">
            </p>
            <p>
                <label for="nome_turma">Nome da Turma</label>
                <input type="text" name="nome_turma" id="nome_turma" placeholder="Informe o nome da turma" required>
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