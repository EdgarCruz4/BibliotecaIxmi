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
        $today = date('m');
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
                                        <select class="custom-select custom-select-sm float-right" id="tyme">
                                            <option selected hidden>Fecha de auditoria</option>
                                            <?php
                                                $months = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
                                                $result = $consulta->getSurveyDate();
                                                foreach($result as $data){
                                                    $numberMonth = $data['mes'] -1;
                                                    $month = $months[$numberMonth];
                                                    ?>
                                                    <option value="<?php echo $data['mes']."-".$data['año'];?>"><?php echo $month."-".$data['año'];?></option>
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
                                <input type="hidden" id="dataTest" value="">
                                <input type="hidden" id="user" value="<?php echo $_SESSION['id_biblioteca']?>">
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
    $(document).ready(function () {
        startReading();
    });
    $(function(){
        $("#tyme").on('change', function(){
            var tyme = $("#tyme").val();
            var user = $("#user").val();
            var flag = true;
            var ruta = "tyme="+tyme+"&flag="+flag+"&user="+user;
            $.ajax({
            url: 'assets/updateGraph.php',
            type: 'POST',
            data: ruta,
            success:function(data){
                $("#dataTest").val(data);
                readChart();
            }
        })
        })
    })

    function startReading(){
        var today = new Date();
        var currentMonth = today.getMonth()+1;
        var currentYear = today.getFullYear();
        var flag = false;
        var user = $("#user").val();
        var ruta = "currentMonth="+currentMonth+"&currentYear="+currentYear+"&flag="+flag+"&user="+user;
        $.ajax({
            url: 'assets/updateGraph.php',
            type: 'POST',
            data: ruta,
            success:function(data){
                $("#dataTest").val(data);
                readChart();
            }
        })
    }

    function readChart(){
        var dataTest = $("#dataTest").val();
        var currentData = $("#currentData").val();

        let data = dataTest.split('-');
        var excellent = parseInt(data[0]);
        var good = parseInt(data[1]);
        var regular = parseInt(data[2]);
        var nonExistent = parseInt(data[3]);

        google.charts.load("current", {packages:['corechart']});
        google.charts.setOnLoadCallback(drawChartColumn)
        function drawChartColumn() {
            var data = google.visualization.arrayToDataTable([
                ["Element", "Density", { role: "style" } ],
                ["Siempre", excellent, "#3366CC"],
                ["Casi siempre", good, "#109618"],
                ["Algunas veces", regular, "#FF9900"],
                ["Inexistente", nonExistent, "color: #DC3912"]
            ])
            var view = new google.visualization.DataView(data);
            view.setColumns([0, 1,
                            { calc: "stringify",
                                sourceColumn: 1,
                                type: "string",
                                role: "annotation" },
                            2])
            var options = {
                bar: {groupWidth: "60%"},
                legend: { position: "none" },
            };
            var chart = new google.visualization.ColumnChart(document.getElementById("bar"));
            chart.draw(view, options);
            document.getElementById('barImg').value=chart.getImageURI()
        }
    }

</script>
</html>
