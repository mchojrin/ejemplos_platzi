<?php
    $cantidad_filas=10
$cantidad_columnas=2


$numero= $_POST['Numero'];
$multiplicar=10;


$i=1;


echo "<table border=1>";

while ($i<=10) {
    echo "$numero x $i = ".$numero*$i."<br/>";
    $i++;
}

$factorial = 1;

    for ($f = $numero; $f >= 1; $f--) {

        $factorial *= f;

        echo $factorial;
        ?>