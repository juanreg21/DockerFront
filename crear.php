<?php

$otro=$_POST['nombre'];
//$img=$_POST['imagen'];
shell_exec ("sudo ./script.sh $otro");

$result=shell_exec ("sudo docker run -d alpine");
$crea=shell_exec ("sudo docker ps -a");
echo "Tu ID del contenedor es <b>$result</b>";
echo "<pre>$crea</pre>";
?>
