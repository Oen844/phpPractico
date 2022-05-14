<?php

    $palabras = array("sol", "luna", "cielo");
    $palabrasDesordenadas = array();

    for($i = 0; $i < count($palabras); $i++) {
        $palabrasDesordenadas[$i] =  str_shuffle($palabras[$i]);
    }

    print_r($palabrasDesordenadas);
    echo "
    
    <form action= 'analisis.php'>
        <input type='text' name='palabra0' placeholder='Ingrese una palabra'>
        <input type='text' name='palabra1' placeholder='Ingrese una palabra'>
        <input type='text' name='palabra2' placeholder='Ingrese una palabra'>
        <button type='submit'>Enviar</button>
        </form>
    "

?>