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
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ breadcrumb ] end -->
            <!-- [ Main Content ] start -->
            <form action="chartPdf.php" method="post">
                <!-- <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-header">
                                <h5>Resultados de las encuestas realizadas Enero-Abril</h5>
                                <input type="hidden" id="barImg" name="bar">
                                <button type="submit" class="btn btn-outline-primary btn-sm float-right"><i class="fa-solid fa-print fa-lg" title="Imprimir"></i> &nbsp Imprimir</button>
                            </div>
                            <div class="card-body">
                                <div id="bar" class=" text-center" style="width: 100%; height: 400px;"></div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-header">
                                <input type="hidden" id="pieImg" name="pie">
                                <h5>Resultados de las encuestas realizadas Enero-Abril</h5>
                                <button type="submit" class="btn btn-outline-primary btn-sm float-right"><i class="fa-solid fa-print fa-lg" title="Imprimir"></i> &nbsp Imprimir</button>
                            </div>
                            <div class="card-body">
                                <div id="pie" style="width: 100%; height: 450px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <!-- [ Main Content ] end -->
            
        </div>
    </div>
	<!-- [ Main Content ] end -->

</body>
<!-- Google Charts -->
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<!-- Script para crear el grafico -->
<script type="text/javascript">
    // google.charts.load('current', {'packages':['bar']});
    // google.charts.setOnLoadCallback(drawChartColumn);

    // function drawChartColumn() {
    //     var data = google.visualization.arrayToDataTable([
    //         ['Genre', 'Fantasy & Sci Fi', 'Romance', 'Mystery/Crime', 'General',
    //         'Western', 'Literature', { role: 'annotation' } ],
    //         ['2010', 10, 24, 20, 32, 18, 5, ''],
    //         ['2020', 16, 22, 23, 30, 16, 9, ''],
    //         ['2030', 28, 19, 29, 30, 12, 13, '']
    //     ]);

    //     var options = {
    //         legend: { position: 'top', maxLines: 3 },
    //         bar: { groupWidth: '30%' },
    //         isStacked: true,
    //     };

    //     var chart = new google.visualization.ColumnChart(document.getElementById('bar'));

    //     chart.draw(data, options);
    //     document.getElementById('barImg').value = chart.getImageURI();
    // }

    google.charts.load("current", {packages:["corechart"]});
    google.charts.setOnLoadCallback(drawChartPie);
    function drawChartPie() {
        var data = google.visualization.arrayToDataTable([
            ['Task', 'Hours per Day'],
            ['Siempre',     11],
            ['Casi siempre',      2],
            ['Algunas veces',  2],
            ['Inexistente', 2],
        ]);
        var options = {
            is3D: true,
            colors: ['#3366CC', '#109618', '#FF9900', '#DC3912']
        };
            
        var chart = new google.visualization.PieChart(document.getElementById('pie'));
        chart.draw(data, options);
        document.getElementById('pieImg').value=chart.getImageURI();
    }

</script>
</html>
