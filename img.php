<?php


if ($result == NULL)
	{?>
		<script>
		alert("NO SE PUEDE BORRAR, CONTENEDOR EN USO");
		</script>
	<?php
		include 'imagenes.php';
	}
else 
{
	$img=$_POST['imagen'];
	$result=shell_exec("sudo docker rmi $img");
	include 'imagenes.php';
}
?>
