<?php
include_once 'assets/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$consulta = "SELECT * FROM preguntas";
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$data=$resultado->fetchAll(PDO::FETCH_ASSOC);


?>
<Style>
    
  table {
    border-collapse: collapse;
    border: black 1px solid;

  margin: 15px;
  padding: 15px;
}

th{
    border: black 1px solid;
}

tbody {
    border: black 1px solid;
  margin: 15px;
  padding: 15px;
}
tr {
    border: black 1px solid;
  margin: 15px;
  padding: 15px;
}
td {
    border: black 1px solid;
  margin: 15px;
  padding: 15px;
}



</Style>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Auditoria de biblioteca
    </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="Phoenixcoded" />
    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

    <!-- vendor css -->
    <link rel="stylesheet" href="assets/css/style.css">

</head>
<body class="">
    <!-- Menu start -->
	<?php
        include_once 'menu.php';
        $today = date('Y-m-d');
        $time = date('h:i:s');
	?>
	<!-- Menu end -->	
    
    
    <!-- [ Main Content ] start -->
    <div class="pcoded-main-container">
        <div class="pcoded-content">
            <!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h5 class="m-b-10">Auditoria</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php"><i class="feather icon-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#!">Auditoria</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
				<!-- [ basic-alert ] start -->
				<div class="col-md-12">
					<div class="card">
						<div class="card-header">
							<h5>Auditoria</h5>
						</div>
                        <form>


        <form>
		<style>
		td {
			padding: 10px;
		}
		label {
			display: inline-block;
			margin-right: 10px;
		}
		.radio-container {
			display: inline-block;
		}
		input[type="radio"] {
			display: inline-block;
			margin-right: 5px;
		}
        
	</style>
</head>
<body>
	<form>
		<table>
            <thead align="center">
                <th>Pregunta</th>
                <th>1</th>
                <th>2</th>
                <th>3</th>
                <th>4</th>
            </thead>
			<tbody>
			<?php
			foreach($data as $dat){
			?>
				<tr>
					<td>
						<?php echo $dat ['pregunta']?>
					</td>

					<td align="center">
						<div class="radio-container">
                            <label for="opcion1-pregunta1"></label>
							<input type="radio" name="pregunta1" value="1">
							<th><label for="opcion2-pregunta1"></label>
							<input type="radio" name="pregunta1" value="2"></th>
							<th><label for="opcion3-pregunta1"></label>
							<input type="radio" name="pregunta1" value="3"></th>
							<th><label for="opcion4-pregunta1"></label>
							<input type="radio" name="pregunta1" value="4"></th>
						</div>
					</td>

					<?php
			}
					?>
					
				</tr>
				<tr>

			</tbody>
		</table>
	</form>
					</div>
				</div>
            </div>
            
           

            
</body>

</html>
