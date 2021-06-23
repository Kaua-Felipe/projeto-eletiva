<?php
    function uploadImagem() {
        $formatosPermitidos = array('png','jpeg', 'jpg', 'gif','jfif');
        $qtdArquivos = count($_FILES['img_escola']['name']);
        $contador = 0;

        while($contador < $qtdArquivos):
            $extensao = pathinfo($_FILES['img_escola']['name'][$contador],PATHINFO_EXTENSION);
            
            if(in_array($extensao, $formatosPermitidos)):
                $pasta = "../images/";
                $temp = $_FILES['img_escola']['tmp_name'][$contador];
                $imagem = uniqid().".$extensao";

                move_uploaded_file($temp, $pasta.$imagem);
            endif;
            $contador++;
        endwhile;
    }
?>