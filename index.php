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
				<tr>
					<td>
						<label for="pregunta1">¿La institución cuenta con visón?</label>
					</td>
					<td align="center">
						<div class="radio-container">
                            <label for="opcion1-pregunta1"></label>
							<input type="radio" id="1" name="pregunta1" value="1">
							<th><label for="opcion2-pregunta1"></label>
							<input type="radio" id="2" name="pregunta1" value="2"></th>
							<th><label for="opcion3-pregunta1"></label>
							<input type="radio" id="3" name="pregunta1" value="3"></th>
							<th><label for="opcion4-pregunta1"></label>
							<input type="radio" id="4" name="pregunta1" value="4"></th>
						</div>
					</td>
				</tr>
				<tr>
					<td>
						<label for="pregunta2"> ¿La visión de la organización constituye una declaración fundamental de sus valores, aspiraciones y metas?</label>
					</td>
					<td>
						<div class="radio-container">
							<label for="opcion1-pregunta2"></label>
							<input type="radio" id="1" name="pregunta2" value="1">
							<th><label for="opcion2-pregunta2"></label>
							<input type="radio" id="2" name="pregunta2" value="2"></th>
							<th><label for="opcion3-pregunta2"></label>
							<input type="radio" id="3" name="pregunta2" value="3"></th>
							<th><label for="opcion4-pregunta2"></label>
							<input type="radio" id="4" name="pregunta2" value="4"></th>
						</div>
					</td>
                    </tr>
				<tr>
                    <td>
						<label for="pregunta2">¿Es la visión un elemento de juicio para poder perfilar las estrategias?</label>
					</td>
					<td>
						<div class="radio-container">
							<label for="opcion1-pregunta3"></label>
							<input type="radio" id="1" name="pregunta3" value="1">
							<th><label for="opcion2-pregunta3"></label>
							<input type="radio" id="2" name="pregunta3" value="2"></th>
							<th><label for="opcion3-pregunta3"></label>
							<input type="radio" id="3" name="pregunta3" value="3"></th>
							<th><label for="opcion4-pregunta3"></label>
							<input type="radio" id="4" name="pregunta3" value="4"></th>
						</div>
					</td>
                    </tr>
				<tr>
                    <td>
						<label for="pregunta2">¿La esencia de la visión considera a todos y cada uno de los indicadores, metas y servicios que ofrecen las bibliotecas?</label>
					</td>
					<td>
						<div class="radio-container">
							<label for="opcion1-pregunta3"></label>
							<input type="radio" id="1" name="pregunta4" value="1">
							<th><label for="opcion2-pregunta3"></label>
							<input type="radio" id="2" name="pregunta4" value="2"></th>
							<th><label for="opcion3-pregunta3"></label>
							<input type="radio" id="3" name="pregunta4" value="3"></th>
							<th><label for="opcion4-pregunta3"></label>
							<input type="radio" id="4" name="pregunta4" value="4"></th>
						</div>
					</td>

                    </tr>
				<tr>
                    <td>
						<label for="pregunta2">¿Es la visión un elemento de juicio para poder perfilar las estrategias?</label>
					</td>
					<td>
						<div class="radio-container" >
							<label for="opcion1-pregunta3"></label>
							<input type="radio" id="1" name="pregunta5" value="1">
							<th><label for="opcion2-pregunta3"></label>
							<input type="radio" id="2" name="pregunta5" value="2"></th>
							<th><label for="opcion3-pregunta3"></label>
							<input type="radio" id="3" name="pregunta5" value="3"></th>
							<th><label for="opcion4-pregunta3"></label>
							<input type="radio" id="4" name="pregunta5" value="4"></th>
						</div>
					</td>
				</tr>
			</tbody>
		</table>
	</form>
					</div>
				</div>
            </div>
            
           

            
</body>

</html>
