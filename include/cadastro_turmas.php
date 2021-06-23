<section id="container-cadastro-escola">
    <form action="" method="post" class="modal-content">
        <h3>Adicionar Turma</h3>
        <div class="container-campos">
            <p>
                <label>Escolha uma imagem para a escola</label>
                <label for="img_escola" class="img_escola">Selecioinar</label>
                <input type="file" name="img_escola" id="img_escola" required>
            </p>
            <p>
                <label for="nome_escola">Nome da Turma</label>
                <input type="text" name="nome_escola" id="nome_escola" placeholder="Informe o nome da turma" required>
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