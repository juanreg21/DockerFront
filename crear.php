<?php

$name=$_POST['nombre'];
$img=$_POST['imagen'];
$port=$_POST['puerto'];
$result=shell_exec("sudo docker run -d -it --name=$name -p $port:80 $img");
//$num=$_POST['imagen'];
//$result=shell_exec ("sudo ./script.sh $otro $num");
$container=shell_exec ("sudo docker ps");
$container2=shell_exec ("sudo docker ps -a");
//$result=shell_exec ("sudo ./stop.sh $otro");
//echo "Tu ID del contenedor es <b>$result</b>";
echo "El ID del contenedor es <b>$result</b>";
//echo "El contenedor <b>$otro</b> ha sido parado";

echo "<h2>Contenedores en ejecucion</h2></br>";
echo "<pre>$container</pre></br>";
echo "<h2>Contenedores parados</h2></br>";
echo "<pre>$container2</pre>";
?>
