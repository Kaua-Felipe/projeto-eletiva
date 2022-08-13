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
            <button type="button" onclick="sairModelo()" class="cancelbtn">Cancelar</button>
        </div>
    </form>
</section>