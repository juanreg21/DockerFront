<?php

$name=$_POST['nombre'];
$img=$_POST['imagen'];
$port=$_POST['puerto'];

$result=shell_exec("sudo docker run -d -it --name=$name -p $port:80 $img /bin/bash");

//$container=shell_exec ("sudo docker ps");
//$container2=shell_exec ("sudo docker ps -a");


$lista=shell_exec("sudo curl --unix-socket /var/run/docker.sock http:/v1.24/containers/json");

file_put_contents('demo.json', $lista);


//echo "El ID del contenedor es <b>$result</b>";

//echo "<h2>Contenedores en ejecucion</h2></br>";
//echo "<pre>$container</pre></br>";

//echo "<h2>Contenedores parados</h2></br>";
//echo "<pre>$container2</pre>";

include 'index.php';
?>
