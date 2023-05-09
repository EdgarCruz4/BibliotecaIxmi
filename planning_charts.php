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

    <!-- pdf -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="assets/js/pdf.js"></script>

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
                            <h5>Resultados de las encuestas realizadas Enero-Abril</h5>
                            <a href="chartPDF.html" id="btnCrearPdf"><span class="float-right"><i class="fa-solid fa-print fa-lg" title="Imprimir"></i> &nbsp Imprimir</span></a>
                            <!-- <button id="btnCrearPdf">pdf</button> -->
                        </div>
                        <div class="card-body">
                            <div id="planeacion"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <h5>Resultados de las encuestas realizadas Enero-Abril</h5>
                            <a href="chartPDF.html" id="btnCrearPdf"><span class="float-right"><i class="fa-solid fa-print fa-lg" title="Imprimir"></i> &nbsp Imprimir</span></a>
                            <!-- <button id="btnCrearPdf">pdf</button> -->
                        </div>
                        <div class="card-body">
                            <div id="generalChart" class=" text-center"></div>
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
