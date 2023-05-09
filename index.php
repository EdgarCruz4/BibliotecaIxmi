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
                        <div class="card-body">
                            <form action="encuesta.php" method="post">
                                <table class="">
                                    <thead align="center">
                                        <tr>
                                            <th>Pregunta</th>
                                            <th>1</th>
                                            <th>2</th>
                                            <th>3</th>
                                            <th>4</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $i=1;
                                    foreach($data as $dat){
                                        $i ++;
                                    ?>
                                        <tr>
                                            <th>
                                                <?php echo $dat ['pregunta']?>
                                            </th>

                                            <div class="radios">
                                                <td>
                                                    <div class="ml-4 mb-2">
                                                        <input class="form-check-input"  type="radio" value="1" name="pregunta<?php echo $i?>">
                                                        <label for=""></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="ml-4 mb-2">
                                                        <input class="form-check-input" type="radio" value="2" name="pregunta <?php echo $i?>">
                                                        <label for=""></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="ml-4 mb-2">
                                                        <input class="form-check-input" type="radio" value="3" name="pregunta <?php echo $i?>">
                                                        <label for=""></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="ml-4 mb-2">
                                                        <input class="form-check-input" type="radio" value="4" name="pregunta <?php echo $i?>">
                                                        <label for=""></label>
                                                    </div>
                                                </td>
                                            </div>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                    </tbody>
                                </table>
                                <div>
                                    <button type="submit" class="btn btn-primary btn-sm float-right"><i class="fa-solid fa-floppy-disk"></i>  &nbsp Enviar</button>
                                </div>
                            </form>
                        </div>
					</div>
				</div>
            </div>
        </div>
    </div>
            
            
</body>

</html>
