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
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-header">
                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                        <h5>Resultados de auditoria</h5>
                                        <input type="hidden" id="barImg" name="bar">
                                    </div>
                                    <div class="col-md-auto">
                                        <select class="custom-select custom-select-sm float-right">
                                            <option selected hidden>Fecha de auditoria</option>
                                            <?php
                                                $result = $consulta->getSurveyDate();
                                                foreach($result as $data){
                                                    $numberMonth = $data['mes'] -1;
                                                    $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
                                                    $mes = $meses[$numberMonth];
                                                    ?>
                                                    <option value=""><?php echo $mes."-".$data['año'];?></option>
                                                    <?php
                                                }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="col-md-auto">
                                        <button type="submit" class="btn btn-outline-primary btn-sm float-right"><i class="fa-solid fa-print fa-lg" title="Imprimir"></i> &nbsp Imprimir</button>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="bar" class=" text-center" style="width: 100%; height: 400px;"></div>
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
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChartColumn);

    function drawChartColumn() {
        var data = google.visualization.arrayToDataTable([
            ["Element", "Density", { role: "style" } ],
            ["Siempre", 8.94, "#3366CC"],
            ["Casi siempre", 10.49, "#109618"],
            ["Algunas veces", 19.30, "#FF9900"],
            ["Inexistente", 21.45, "color: #DC3912"]
        ]);

        var view = new google.visualization.DataView(data);
        view.setColumns([0, 1,
                        { calc: "stringify",
                            sourceColumn: 1,
                            type: "string",
                            role: "annotation" },
                        2]);

        var options = {
            bar: {groupWidth: "60%"},
            legend: { position: "none" },
        };
        var chart = new google.visualization.ColumnChart(document.getElementById("bar"));
        chart.draw(view, options);
        document.getElementById('barImg').value=chart.getImageURI();

    }

</script>
</html>
