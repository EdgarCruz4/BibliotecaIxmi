<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ablepro v8.0 bootstrap admin template by Phoenixcoded</title>
    <!-- Meta -->
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
                                <h5 class="m-b-10">Resultados de auditoria</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php"><i class="feather icon-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#!">Graficas</a></li>
                                <li class="breadcrumb-item"><a href="#!">Organización</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ breadcrumb ] end -->
            <!-- [ Main Content ] start -->
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <h5>Exploración</h5>
                            <a href="#"><span class="float-right"><i class="fa-solid fa-print fa-lg" title="Imprimir"></i> &nbsp Imprimir</span></a>
                        </div>
                        <div class="card-body">
                            <div id="chart1"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <h5>Estructura organizacional</h5>
                            <span class="float-right"></span>
                        </div>
                        <div class="card-body">
                            <div id="chart2"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <h5>División y distribución de funciones</h5>
                            <span class="float-right"></span>
                        </div>
                        <div class="card-body">
                            <div id="chart3"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <h5>Cultura organizacional</h5>
                            <span class="float-right"></span>
                        </div>
                        <div class="card-body">
                            <div id="chart4"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <h5>Recursos humanos</h5>
                            <span class="float-right"></span>
                        </div>
                        <div class="card-body">
                            <div id="chart5"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <h5>Normatividad</h5>
                            <span class="float-right"></span>
                        </div>
                        <div class="card-body">
                            <div id="chart6"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <h5>Remuneración del personal</h5>
                            <span class="float-right"></span>
                        </div>
                        <div class="card-body">
                            <div id="chart7"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <h5>Capacitación y desarrollo</h5>
                            <span class="float-right"></span>
                        </div>
                        <div class="card-body">
                            <div id="chart8"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <h5>Seguridad e higiene</h5>
                            <span class="float-right"></span>
                        </div>
                        <div class="card-body">
                            <div id="chart9"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <h5>Evaluación del desempeño</h5>
                            <span class="float-right"></span>
                        </div>
                        <div class="card-body">
                            <div id="chart10"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <h5>Inteligencia emocional</h5>
                            <span class="float-right"></span>
                        </div>
                        <div class="card-body">
                            <div id="chart11"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <h5>Valores</h5>
                            <span class="float-right"></span>
                        </div>
                        <div class="card-body">
                            <div id="chart12"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <h5>Ética</h5>
                            <span class="float-right"></span>
                        </div>
                        <div class="card-body">
                            <div id="chart13"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <h5>Cambio organizacional</h5>
                            <span class="float-right"></span>
                        </div>
                        <div class="card-body">
                            <div id="chart14"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <h5>Instrumentos técnicos de apoyo</h5>
                            <span class="float-right"></span>
                        </div>
                        <div class="card-body">
                            <div id="chart15"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ Main Content ] end -->
            
        </div>
    </div>
	<!-- [ Main Content ] end -->
</body>
</html>
