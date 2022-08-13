<?php
    $id_escola = $_GET['escola_id'];
    $query = "SELECT * FROM escolas WHERE ID_escola = $id_escola";
    $executa_query = mysqli_query($conecta,$query);
    $dados = mysqli_fetch_assoc($executa_query);
?>
<section id="container-editar-escola" class="modal-editar">
    <form enctype="multipart/form-data" action="../_php_action/editar_escola.php?escola_id=<?php echo $_GET['escola_id']?>" method="post" class="modal-content animate">
        <h3>Editar Escola</h3>
        <div class="container-campos">
            <p>
                <img src="../images/<?php echo $dados['img_escola']?>" id="img_edit" width="100%" height="300">
                <label>Escolha uma imagem para a escola</label>
                <label for="img_escola_edit" class="img_escola">Selecionar</label>
                <input type="file" name="img_escola" id="img_escola_edit" onchange="previewImageEdit()">
            </p>
            <p>
                <label for="nome_escola">Nome da escola</label>
                <input type="text" value="<?php echo $dados['nome_escola']?>" name="nome_escola" id="nome_escola" placeholder="Informe o nome da escola" required>
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