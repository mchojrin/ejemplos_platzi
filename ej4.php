<?php

    function imprimirDatos()
    {
        GLOBAL $edad, $nombre;

        echo "$nombre: $edad";
        $edad++;
    }

    function esMayorDeEdad( int $edad )
    {
        return $edad > 18;
    }

    $nombre = 'Mauro';
    $edad = 18;

    imprimirDatos();

    if ( esMayorDeEdad( $edad ) ) {

        echo 'Es mayor!';
    }
