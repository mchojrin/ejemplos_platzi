<?php

if (isset($_POST['t'])) {
    $t = trim(addslashes($_POST['t']));
    $SQL = 'select * from t WHERE c like "%' . $t . '%" ';
 } 