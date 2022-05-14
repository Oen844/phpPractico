<?php

    $palabras = array("sol", "luna", "cielo", "perro");
    $palabrasDesordenadas = array();

    for($i = 0; $i < count($palabras); $i++) {
        $palabrasDesordenadas[$i] =  str_shuffle($palabras[$i]);
    }
    $form =  "<form action= 'analisis.php'>";
    for($i = 0; $i < count($palabras); $i++) {
        $form .= "<input type='text' name='palabra".$i."' value='".$palabrasDesordenadas[$i]."' readonly>";
    }
    $button = "<button type='submit'>Enviar</button>
    </form>";
    print_r($palabrasDesordenadas);
    echo 
    $form . $button;

?>