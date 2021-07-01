<?php
    $formatosPermitidos = array('png','jpeg', 'jpg', 'gif','jfif');
    $extensao = pathinfo($_FILES['img_escola']['name'],PATHINFO_EXTENSION);
    
    if(in_array($extensao, $formatosPermitidos)):
        $pasta = "../images/";
        $temp = $_FILES['img_escola']['tmp_name'];
        $imagem = uniqid().".$extensao";
    
        move_uploaded_file($temp, $pasta.$imagem);
    endif;
?>