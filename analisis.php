<?php
print_r($_REQUEST);
$palabras = array("sol", "luna", "cielo");
echo "<br>" ;
if($_REQUEST['palabra0'] == $palabras[0] && $_REQUEST['palabra1'] == $palabras[1] && $_REQUEST['palabra2'] == $palabras[2]) {
    echo "Felicidades, has ganado!";
} else {
    echo "Lo siento, has perdido!";
}
echo "<br>" ;
if($_REQUEST['palabra0'] == $palabras[0]) {
    echo "La palabra 0 es correcta";
} else {
    echo $palabras[0];
}
echo "<br>" ;
if($_REQUEST['palabra1'] == $palabras[1]) {
    echo "La palabra 1 es correcta";
} else {
    echo $palabras[1];
}
echo "<br>" ;
if($_REQUEST['palabra2'] == $palabras[2]) {
    echo "La palabra 2 es correcta";
} else {
    echo $palabras[2];
}


?>