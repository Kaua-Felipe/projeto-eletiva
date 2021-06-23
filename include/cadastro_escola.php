<section id="container-cadastro-escola">
    <form enctype="multipart/form-data" action="../_php_action/cadastroEscola.php" method="post" class="modal-content animate">
        <h3>Adicionar Escolas</h3>
        <div class="container-campos">
            <p>
                <img src="../resources/predefinicao-escola.png" id="img" width="100%" height="300">
                <label>Escolha uma imagem para a escola</label>
                <label for="img_escola" class="img_escola">Selecionar</label>
                <input type="file" name="img_escola" id="img_escola" onchange="previewImage()" required>
            </p>
            <p>
                <label for="nome_escola">Nome da escola</label>
                <input type="text" name="nome_escola" id="nome_escola" placeholder="Informe o nome da escola" required>
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

    var inputFicheiro = document.getElementById('img_escola');
    var img = document.getElementById("img")

    function previewImage() {
        var oFReader = new FileReader()
        oFReader.readAsDataURL(inputFicheiro.files[0])
        oFReader.onload = function(oFREvent) {
            img.src = oFREvent.target.result
        }
    }
</script>