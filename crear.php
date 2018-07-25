<?php

//$otro=$_POST['nombre'];
//$img=$_POST['imagen'];
//shell_exec ("sudo ./script.sh $otro $img");

$result=shell_exec ("sudo docker run -d alpine");
echo "Tu ID del contenedor es <b>$result</b>";
?>
