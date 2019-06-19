<?php

if (isset($_POST['textobusqueda'])) {
    $textobusca = trim(addslashes($_POST['textobusqueda']));
    $SQL = 'select * from usuarios WHERE nombre like "%' . $textobusca . '%" ';
 }
 