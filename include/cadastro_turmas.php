<section id="container-cadastro-escola">
    <form action="../templates/exibicao_turmas.php?escola=<?php echo $_GET['escola']?>" method="post" class="modal-content animate">
        <h3>Adicionar Turma</h3>
        <div class="container-campos">
            <p>
                <img src="../resources/img_cadastro_turma.png" id="img" width="100%" height="300">
                <!-- <label>Escolha uma imagem para a escola</label>
                <label for="img_escola" class="img_escola">Selecioinar</label>
                <input type="file" name="img_escola" id="img_escola"> -->
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