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
    <link rel="stylesheet" href="css/auditoria.css">

    <!-- Css personalizado -->
    <!-- <link rel="stylesheet" href="assets/css/myStyle.css"> -->

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
                                <li class="breadcrumb-item"><a href="index.php"><i class="feather icon-home"></i></a>
                                </li>
                                <li class="breadcrumb-item"><a href="#!">Auditoria</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ breadcrumb ] end -->
            <!-- [ Main Content ] start -->
            <div class="row">
                <div class="col-lg-7 col-md-12">
                    <!-- support-section start -->
                    <div class="row">
                    </div>
                    <!-- support-section end -->
                </div>
                <div class="col-lg-5 col-md-12">
                    <!-- page statustic card start -->
                    <div class="row">
                    </div>
                    <!-- page statustic card end -->
                </div>
                <!-- prject ,team member start -->
                <div class="col-xl-12 col-md-12">
                    <div class="card table-card">


                        <div class="card-header">
                            <h5>Auditoria</h5>
                            <div class="card-header-right">
                                <div class="btn-group card-option">
                                    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="feather icon-more-horizontal"></i>
                                    </button>
                                    <ul class="list-unstyled card-option dropdown-menu dropdown-menu-right">
                                        <li class="dropdown-item full-card"><a href="#!"><span><i
                                                        class="feather icon-maximize"></i> maximize</span><span
                                                    style="display:none"><i class="feather icon-minimize"></i>
                                                    Restore</span></a></li>
                                        <li class="dropdown-item minimize-card"><a href="#!"><span><i
                                                        class="feather icon-minus"></i> collapse</span><span
                                                    style="display:none"><i class="feather icon-plus"></i>
                                                    expand</span></a></li>
                                        <li class="dropdown-item reload-card"><a href="#!"><i
                                                    class="feather icon-refresh-cw"></i> reload</a></li>
                                        <li class="dropdown-item close-card"><a href="#!"><i
                                                    class="feather icon-trash"></i> remove</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-2">



<section class="signup-step-container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-10">
                    <div class="wizard col-11">
                        <div class="wizard-inner">
                            <div class="connecting-line"></div>
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active">
                                    <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab"><span class="round-tab">1 </span> <i>Misión</i></a>
                                </li>
                                <li role="presentation" class="disabled">
                                    <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab"><span class="round-tab">2</span> <i>Visión</i></a>
                                </li>
                                <li role="presentation" class="disabled">
                                    <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab"><span class="round-tab">3</span> <i>Objetivos</i></a>
                                </li>
                                <li role="presentation" class="disabled">
                                    <a href="#step4" data-toggle="tab" aria-controls="step4" role="tab"><span class="round-tab">4</span> <i>Metas</i></a>
                                </li>
                                <li role="presentation" class="disabled">
                                    <a href="#step5" data-toggle="tab" aria-controls="step5" role="tab"><span class="round-tab">5</span> <i>Procesos</i></a>
                                </li>
                                <li role="presentation" class="disabled">
                                    <a href="#step6" data-toggle="tab" aria-controls="step6" role="tab"><span class="round-tab">6</span> <i>Procedimientos</i></a>
                                </li>
                                <li role="presentation" class="disabled">
                                    <a href="#step7" data-toggle="tab" aria-controls="step7" role="tab"><span class="round-tab">7</span> <i>Programas</i></a>
                                </li>
                                <li role="presentation" class="disabled">
                                    <a href="#step8" data-toggle="tab" aria-controls="step8" role="tab"><span class="round-tab">8</span> <i>Metas</i></a>
                                </li>
                            </ul>
                        </div>
        
<form role="form" action="index.html" class="login-box">
<div class="tab-content" id="main_form">

<?php
$count = 0;
$total = 200;

$result = $consulta->getForm();
for ($step=1; $step <= 8; $step++) {
?>

<div class="tab-pane <?php if ($step == 1) echo('active'); ?>" role="tabpanel" id="step<?php echo($step); ?>">
<h4 class="text-center">step <?php echo($step); ?></h4>

<table class="table-sm table-striped table-bordered" style="row-gap: 5px;">
<thead class="thead-dark">
<tr>
<th scope="col" >Pregunta</th>
<th scope="col" >1</th>
<th scope="col" >2</th>
<th scope="col" >3</th>
<th scope="col" >4</th>
</tr>
</thead>
<tbody>
<?php
// foreach($result as $dat) {
for (; $count < count($result); $count++)
    {
        if ($step == 1 && $count > 7||
            $step == 2 && $count > 11 ||
            $step == 3 && $count > 23 ||
            $step == 4 && $count > 30 ||
            $step == 5 && $count > 54 ||
            $step == 6 && $count > 78 ||
            $step == 7 && $count > 112 ||
            $step == 8 && $count > 117)
            break;
?>
<tr>
<th>
<?php echo $result[$count]['pregunta']; ?>
</th>

<div class="radios">
<td>
<div class="ml-4 mb-2">
<input class="form-check-input"  type="radio" value="1" name="pregunta<?php echo $count ?>">
</div>
</td>
<td>
<div class="ml-4 mb-2">
<input class="form-check-input" type="radio" value="2" name="pregunta<?php echo $count ?>">
</div>
</td>
<td>
<div class="ml-4 mb-2">
<input class="form-check-input" type="radio" value="3" name="pregunta<?php echo $count ?>">
</div>
</td>
<td>
<div class="ml-4 mb-2">
<input class="form-check-input" type="radio" value="4" name="pregunta<?php echo $count ?>">
</div>
</td>
</div>
</tr>
<?php
        // $count ++;
    }
?>
</tbody>
</table>

<ul class="list-inline pull-right">
<?php
if ($step > 1)
{
?>
<li><button type="button" class="default-btn prev-step">Back</button></li>
<?php
}?>
<!-- <li><button type="button" class="default-btn next-step skip-btn">Skip</button></li> -->
<li><button type="button" class="default-btn next-step">Continuar</button></li>
</ul>
</div>

<?php
}
?>



<div class="clearfix"></div>
</div>
</form>
                    </div>
                </div>
            </div>
    </section>



                        </div>
                    </div>
                </div>
            </div>
            <!-- [ Main Content ] end -->
        </div>
    </div>
    <!-- [ Main Content ] end -->

    <script src="js/auditoria.js"></script>
</body>

</html>
