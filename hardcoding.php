<?php

$precioInicial = $argv[1];
$precioConIVA = $precioInicial * 1.21;

echo "Sin IVA: \$$precioInicial, con IVA: \$$precioConIVA".PHP_EOL;
