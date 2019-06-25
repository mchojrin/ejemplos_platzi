<?php

$filtros=[];

if(isset($_GET['importe'])){
  $filtros['importe']=$_GET['importe'];
}

if(isset($_GET['codigo'])){$filtros['codigo']=$_GET['codigo'];}
