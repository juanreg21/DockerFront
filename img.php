<?php

$img=$_POST['imagen'];

$result=shell_exec("sudo docker image rm $img");

include 'imagenes.php';

?>
