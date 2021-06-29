<?php
    $id_turma = $_GET['turma_id'];
    $query = "SELECT * FROM turmas WHERE ID_turma = $id_turma";
    $executa_query = mysqli_query($conecta, $query);
    $nome_turma = mysqli_fetch_assoc($executa_query)['nome_turma'];
?>
<section id="container-editar-turma" class="modal-editar">
    <form action="../_php_action/editar_turma.php?turma_id=<?php echo $_GET['turma_id']?>&escola=<?php echo $_GET['escola']?>" method="post" class="modal-content animate">
        <h3>Editar Turma</h3>
        <div class="container-campos">
            <p>
                <img src="../resources/img_cadastro_turma.png" id="img" width="100%" height="300">
            </p>
            <p>
                <label for="nome_turma">Nome da Turma</label>
                <input type="text" name="nome_turma" value="<?php echo $nome_turma?>" id="nome_turma" placeholder="Informe o nome da turma" required>
            </p>
            <p>
                <input type="submit" value="ENVIAR">
            </p>
        </div>
        
        <div class="container-rodape">
            <button type="button" onclick="sairModeloEdicao()" class="cancelbtn">Cancelar</button>
        </div>
    </form>
</section>