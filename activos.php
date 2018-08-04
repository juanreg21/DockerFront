<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>DockerPanel</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

</head>
<body>

	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="#"><span>Web-</span>Panel</a>
				
				<!-- Campana de avisos, parte superior derecha -->
				<ul class="nav navbar-top-links navbar-right">
					<li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
						<em class="fa fa-bell"></em><span class="label label-info">1</span>
					</a>
						<ul class="dropdown-menu dropdown-alerts">
							<li><a href="#">
								<div><em class="fa fa-envelope"></em> 1 New Message
									<span class="pull-right text-muted small">3 mins ago</span></div>
							</a></li>
						</ul>
					</li>
				</ul>


			</div>
		</div>
	</nav>

	<!-- Panel izquierdo -->
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			
			<!-- Imagen de perfil del usuario -->
			<div class="profile-userpic">
				<img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
			</div>

			<!-- Datos del usuario -->
			<div class="profile-usertitle">
				<div class="profile-usertitle-name">Usuario</div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>

		<!-- Buscador -->
		<div class="divider"></div>
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Buscar">
			</div>
		</form>

		<!-- Menu principal -->
		<ul class="nav menu">
			<li><a href="index.php"><em class="fa fa-dashboard">&nbsp;</em><strong>FrontPanel</strong></a></li>
			<li><a href="contenedor.html"><em class="fa fa-server">&nbsp;</em><strong>Crear contenedor</strong></a></li>
			<li class="active"><a href="activos.php"><em class="fa fa-cogs">&nbsp;</em><strong>Gestionar contenedores</strong></a></li>
			<li><a href="imagenes.php"><em class="fa fa-download">&nbsp;</em><strong>Imagenes</strong></a></li>
			<li><a href="index.html"><em class="fa fa-cloud-download">&nbsp;</em><strong>CMS</strong></a></li>
			<li><a href="index.html"><em class="fa fa-power-off">&nbsp;</em><strong>Cerrar sesión</strong></a></li>
		</ul>
	</div>
		
	
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		
		<!-- Migas de pan del panel central -->
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active"><strong>FrontPanel</strong></li>
			</ol>
		</div>

		<!-- Formulario -->
		<div class="row">
			<div class="col-lg-12">
			</div>
				<h2 class="page-header"><strong>Contenedores activos</strong></h2>
				<button type="button" class="btn btn-md btn-primary" data-toggle="modal" data-target="#myModal">Nuevo contenedor</button>
                                <!-- Modal -->
                                <div id="myModal" class="modal fade" role="dialog">
                                <div class="modal-dialog">
                                        <!-- Modal content-->
                                        <div class="modal-content">
                                                <div class="modal-header">
                                                <h4 class="modal-title"><strong>Crear contenedor</strong></h4>
                                        </div>
                                        <div class="modal-body">
                                                <form role="form" method="post" action="crear.php">
                                                                <div class="form-group">
                                                                        <label>Nombre</label>
                                                                        <input class="form-control" placeholder="Nombre del contenedor" name="nombre">
                                                                </div>
                                                                <div class="form-group">
                                                                        <label>Imagen</label>
                                                                        <input class="form-control" placeholder="Nombre del volumen" name="imagen">
                                                                </div>
                                                                <div class="form-group">
                                                                        <label>Puerto</label>
                                                                        <input class="form-control" placeholder="puerto">
                                                                </div>
                                                                <input type="submit" class="btn btn-md btn-primary" value="Crear">
                                                        </form>

                                        </div>
                                </div>
                                </div>
				</br>

			</div>

		</div>
	
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-body">
							<?php $result=shell_exec("sudo docker ps"); 
							echo "<pre>$result</pre>";
							?>
					</br></br>
					<h2><strong>Panel de gestión</strong></h2>
					<form role="form" method="post" action="">
                                                                <div class="form-group">
                                                                        <label>Nombre del contenedor</label>
                                                                        <input class="form-control" placeholder="Nombre del contenedor" name="nombre">
                                                                </div>

						<input type="submit" class="btn btn-md btn-success" value="Iniciar">
						<input type="submit" class="btn btn-md btn-primary" value="Parar">
						<input type="submit" class="btn btn-md btn-warning" value="Borrar">
                                        	<input type="submit" class="btn btn-md btn-danger" value="Matar">
					</form>

					</div>
					</div>
				</div>
			</div>
		</div>


	</div>	
	
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/custom.js"></script>
	<script>
		window.onload = function () {
		var chart1 = document.getElementById("line-chart").getContext("2d");
		window.myLine = new Chart(chart1).Line(lineChartData, {
		responsive: true,
		scaleLineColor: "rgba(0,0,0,.2)",
		scaleGridLineColor: "rgba(0,0,0,.05)",
		scaleFontColor: "#c5c7cc"
			});
		};
	</script>
		
</body>
</html>
