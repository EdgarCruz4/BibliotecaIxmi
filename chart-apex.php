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
                                <h5 class="m-b-10">Radial Chart</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php"><i class="feather icon-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#!">Chart</a></li>
                                <li class="breadcrumb-item"><a href="#!">Radial Chart</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ breadcrumb ] end -->
            <!-- [ Main Content ] start -->
            <div class="row">
                <!-- [ variant-chart ] start -->
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h5>Basic line chart</h5>
                        </div>
                        <div class="card-body">
                            <div id="line-chart-1"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h5>Realtime Chart</h5>
                        </div>
                        <div class="card-body">
                            <div id="line-chart-2"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h5>Different line chart</h5>
                        </div>
                        <div class="card-body">
                            <div id="line-chart-3"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h5>Area chart</h5>
                        </div>
                        <div class="card-body">
                            <div id="area-chart-1"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h5>Area chart</h5>
                        </div>
                        <div class="card-body">
                            <div class="toolbar btn-group">
                                <button id="one_month" class="btn btn-sm btn-outline-primary">1M</button>
                                <button id="six_months" class="btn btn-sm btn-outline-primary">6M</button>
                                <button id="one_year" class="btn btn-sm btn-outline-primary active">1Y</button>
                                <button id="ytd" class="btn btn-sm btn-outline-primary">YTD</button>
                                <button id="all" class="btn btn-sm btn-outline-primary">ALL</button>
                            </div>
                            <div id="area-chart-2"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h5>Bar chart</h5>
                        </div>
                        <div class="card-body">
                            <div id="bar-chart-1"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h5>Bar chart stacked</h5>
                        </div>
                        <div class="card-body">
                            <div id="bar-chart-2"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h5>Bar chart horizontal</h5>
                        </div>
                        <div class="card-body">
                            <div id="bar-chart-3"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h5>Bar chart horizontal stacked</h5>
                        </div>
                        <div class="card-body">
                            <div id="bar-chart-4"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h5>Mixed Chart</h5>
                        </div>
                        <div class="card-body">
                            <div id="mixed-chart-1"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h5>Mixed Chart</h5>
                        </div>
                        <div class="card-body">
                            <div id="mixed-chart-2"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h5>Candlestick Chart</h5>
                        </div>
                        <div class="card-body">
                            <div id="candlestick-chart-1"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h5>Bubble Chart</h5>
                        </div>
                        <div class="card-body">
                            <div id="bubble-chart-1"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h5>Bubble Chart 3d</h5>
                        </div>
                        <div class="card-body">
                            <div id="bubble-chart-2"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h5>Scatter Chart</h5>
                        </div>
                        <div class="card-body">
                            <div id="scatter-chart-1"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h5>Scatter Chart Datetime</h5>
                        </div>
                        <div class="card-body">
                            <div id="scatter-chart-2"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h5>Heatmap Charts</h5>
                        </div>
                        <div class="card-body">
                            <div id="heatmap-chart-1"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h5>Heatmap Charts Rounded</h5>
                        </div>
                        <div class="card-body">
                            <div id="heatmap-chart-2"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h5>Pie Charts</h5>
                        </div>
                        <div class="card-body">
                            <div id="pie-chart-1" style="width:100%"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h5>Pie Charts donut</h5>
                        </div>
                        <div class="card-body">
                            <div id="pie-chart-2" style="width:100%"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h5>RadialBar Charts</h5>
                        </div>
                        <div class="card-body">
                            <div id="radialBar-chart-1"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h5>RadialBar Charts Custom Angle</h5>
                        </div>
                        <div class="card-body">
                            <div id="radialBar-chart-2"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h5>Radar Charts</h5>
                        </div>
                        <div class="card-body">
                            <div id="radar-chart-1"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h5>Radar Charts Multiple Series</h5>
                        </div>
                        <div class="card-body">
                            <div id="radar-chart-2"></div>
                        </div>
                    </div>
                </div>
                <!-- [ variant-chart ] end -->

            </div>
            <!-- [ Main Content ] end -->
        </div>
    </div>
	<!-- [ Main Content ] end -->
</body>
</html>
