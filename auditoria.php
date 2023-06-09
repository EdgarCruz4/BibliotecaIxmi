<!DOCTYPE html>
<html lang="es">

<head>
    <title>Auditoria</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="Phoenixcoded" />
    <!-- Favicon icon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon">

    <!-- vendor css -->
    <!-- <link rel="stylesheet" href="assets/css/style.css"> -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

<link rel="stylesheet" href="css/auditoria.css">
</head>
<body>
<!-- Menu start -->
<?php
include_once 'menu.php';
$today = date('Y-m-d');
$time = date('h:i:s');
$count = 0;
$id_biblioteca = @$_SESSION['id_biblioteca'];
$result = $consulta->getForm();
$total = count($result);
$step = 1;
?>
<!-- Menu end -->

<!-- Modal -->
<div class="modal fade" id="encuesta-finalizada" tabindex="-1" role="dialog" aria-hidden="false">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Auditoria</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h6>Has finalizado la encuesta.</h6>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

    <!-- [ Main Content ] start -->
    <div class="pcoded-main-container">
        <div class="pcoded-content">
            <!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h5 class="m-b-10"><?php echo($_SESSION['nameUser']); ?></h5>
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

<!-- ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ -->
<section class="signup-step-container">
<div class="wizard">
<div class="wizard-inner ">
<div class="connecting-line"></div>
    <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active section-1">
    <a data-toggle="tab" aria-controls="#step1" data-title="Visión" role="tab"><span class="round-tab">1</span> <i></i></a>
    </li>
    <li role="presentation" class="disabled section-1">
    <a data-toggle="tab" aria-controls="#step2" data-title="Misión" role="tab"><span class="round-tab">2</span> <i></i></a>
    </li>
    <li role="presentation" class="disabled section-1">
    <a data-toggle="tab" aria-controls="#step3" data-title="Objetivos" role="tab"><span class="round-tab">3</span> <i></i></a>
    </li>
    <li role="presentation" class="disabled section-1">
    <a data-toggle="tab" aria-controls="#step4" data-title="Metas" role="tab"><span class="round-tab">4</span> <i></i></a>
    </li>
    <li role="presentation" class="disabled section-1">
    <a data-toggle="tab" aria-controls="#step5" data-title="Procesos" role="tab"><span class="round-tab">5</span> <i></i></a>
    </li>
    <li role="presentation" class="disabled section-1">
    <a data-toggle="tab" aria-controls="#step6" data-title="Procedimientos" role="tab"><span class="round-tab">6</span> <i></i></a>
    </li>
    <li role="presentation" class="disabled section-1">
    <a data-toggle="tab" aria-controls="#step7" data-title="Programas" role="tab"><span class="round-tab">7</span> <i></i></a>
    </li>
    <li role="presentation" class="disabled section-1">
    <a data-toggle="tab" aria-controls="#step8" data-title="Metas" role="tab"><span class="round-tab">8</span> <i></i></a>
    </li>
    <li role="presentation" class="disabled section-2">
    <a data-toggle="tab" aria-controls="#step9" role="tab" data-title="Organización"><span class="round-tab">9</span><i></i></a>
    </li>
    <li role="presentation" class="disabled section-2">
    <a data-toggle="tab" aria-controls="#step10" role="tab" data-title="División y distribución de funciones"><span class="round-tab">10</span><i></i></a>
    </li>
    <li role="presentation" class="disabled section-2">
    <a data-toggle="tab" aria-controls="#step11" role="tab" data-title="Cultura organizacional"><span class="round-tab">11</span><i></i></a>
    </li>
    <li role="presentation" class="disabled section-2">
    <a data-toggle="tab" aria-controls="#step12" role="tab" data-title="Recursos humanos"><span class="round-tab">12</span><i></i></a>
    </li>
    <li role="presentation" class="disabled section-2">
    <a data-toggle="tab" aria-controls="#step13" role="tab" data-title="Reclutamiento, selección, contratación, inducción y socializacion"><span class="round-tab">13</span><i></i></a>
    </li>
    <li role="presentation" class="disabled section-2">
    <a data-toggle="tab" aria-controls="#step14" role="tab" data-title="Normatividad"><span class="round-tab">14</span><i></i></a>
    </li>
    <li role="presentation" class="disabled section-2">
    <a data-toggle="tab" aria-controls="#step15" role="tab" data-title="Renumeracion del personal"><span class="round-tab">15</span><i></i></a>
    </li>
    <li role="presentation" class="disabled section-2">
    <a data-toggle="tab" aria-controls="#step16" role="tab" data-title="Capacitación y desarrollo"><span class="round-tab">16</span><i></i></a>
    </li>
    <li role="presentation" class="disabled section-2">
    <a data-toggle="tab" aria-controls="#step17" role="tab" data-title="Seguridad e higiene"><span class="round-tab">17</span><i></i></a>
    </li>
    <li role="presentation" class="disabled section-2">
    <a data-toggle="tab" aria-controls="#step18" role="tab" data-title="Evaluación del desempeño"><span class="round-tab">18</span><i></i></a>
    </li>
    <li role="presentation" class="disabled section-2">
    <a data-toggle="tab" aria-controls="#step19" role="tab" data-title="Inteligencia emocional"><span class="round-tab">19</span><i></i></a>
    </li>
    <li role="presentation" class="disabled section-2">
    <a data-toggle="tab" aria-controls="#step20" role="tab" data-title="Valores"><span class="round-tab">20</span><i></i></a>
    </li>
    <li role="presentation" class="disabled section-2">
    <a data-toggle="tab" aria-controls="#step21" role="tab" data-title="Ética"><span class="round-tab">21</span><i></i></a>
    </li>
    <li role="presentation" class="disabled section-2">
    <a data-toggle="tab" aria-controls="#step22" role="tab" data-title="Cambio organizacional"><span class="round-tab">22</span><i></i></a>
    </li>
    <li role="presentation" class="disabled section-2">
    <a data-toggle="tab" aria-controls="#step23" role="tab" data-title="Instrumentos técnicos de apoyo"><span class="round-tab">23</span><i></i></a>
    </li>
    </ul>
</div>

<form id="form-encuesta" data-id-biblioteca="<?php echo($id_biblioteca) ?>" role="form">
<div class="tab-content">
<?php
for (; $step <= 23; $step++) {
?>

<div class="tab-pane <?php if ($step == 1)
        echo ('active'); ?>" role="tabpanel" id="step<?php echo ($step); ?>">
<h3 class="text-center form-title">Visión</h3>
<div class="table-responsive">
<table class="table">
<thead>
<tr>
<th>Pregunta</th>
<th>1<ul><li>Inexistente</li><li>Nunca</li><li>No y N/A</li></ul></th>
<th>2<ul><li>No se encuentra definido</li><li>Algunas veces</li><li>Inadecuado</li></ul></th>
<th>3<ul><li>Regular</li><li>Casi siempre</li></ul></th>
<th>4<ul><li>totalmente</li><li>siempre</li><li>muy eficaz</li><li>sí</li></ul></th>
<th style="width: 40px;"></th>
</tr>
</thead>
<tbody>
<?php
for (; $count < $total; $count++)
    {
        if ($step == 1 && $count > 7    ||
            $step == 2 && $count > 11   ||
            $step == 3 && $count > 23   ||
            $step == 4 && $count > 30   ||
            $step == 5 && $count > 54   ||
            $step == 6 && $count > 78   ||
            $step == 7 && $count > 112  ||
            $step == 8 && $count > 117  ||
            $step == 9 && $count > 134  ||
            $step == 10 && $count > 148 ||
            $step == 11 && $count > 168 ||
            $step == 12 && $count > 179 ||
            $step == 13 && $count > 190 ||
            $step == 14 && $count > 194 ||
            $step == 15 && $count > 197 ||
            $step == 16 && $count > 212 ||
            $step == 17 && $count > 220 ||
            $step == 18 && $count > 224 ||
            $step == 19 && $count > 227 ||
            $step == 20 && $count > 233 ||
            $step == 21 && $count > 236 ||
            $step == 22 && $count > 249 ||
            $step == 23 && $count > 259)
            break;
?>
<tr>
<td>
<?php echo $result[$count]['pregunta']; ?>
</td>
<td>
<div class="form-check">
<input data-answer="1" data-id="<?php echo $result[$count]['id']; ?>" data-question="<?php echo $result[$count]['pregunta']; ?>" required class="form-check-input"  type="radio" name="pregunta<?php echo $count ?>">
<!-- <div class="invalid-tooltip">*</div> -->
<!-- <div class="invalid-feedback">*</div> -->
</div>
</td>
<td>
<div class="form-check">
<input data-answer="2" data-id="<?php echo $result[$count]['id']; ?>" data-question="<?php echo $result[$count]['pregunta']; ?>" class="form-check-input" type="radio" name="pregunta<?php echo $count ?>">
<!-- <div class="invalid-feedback">*</div> -->
</div>
</td>
<td>
<div class="form-check">
<input data-answer="3" data-id="<?php echo $result[$count]['id']; ?>" data-question="<?php echo $result[$count]['pregunta']; ?>" class="form-check-input" type="radio" name="pregunta<?php echo $count ?>">
<!-- <div class="invalid-feedback">*</div> -->
</div>
</td>
<td>
<div class="form-check">
<input data-answer="4" data-id="<?php echo $result[$count]['id']; ?>" data-question="<?php echo $result[$count]['pregunta']; ?>" class="form-check-input" type="radio" name="pregunta<?php echo $count ?>">
<!-- <div class="invalid-feedback">*</div> -->
</div>
</td>
<td>
<div class="form-check" style="margin-left: -25px;">
<input required class="form-check-input"  type="radio" name="pregunta<?php echo $count ?>" style="display: none;">
<div class="valid-tooltip feather icon-check"></div>
<div class="invalid-tooltip feather icon-info"></div>
</div>
</td>
</tr>
<?php
}
?>
</tbody>
</table>
</div>
<?php
if ($step >= 23)
{
?>
  <div class="form-group my-5 w-50 h-25" style="border: 1px solid #cccccc;">
  <label for="comentario">Comentario</label>
  <textarea minlength="60"  class="form-control" id="comentario" name="comentario" placeholder=""></textarea>
  </div>
<?php
}?>

<ul class="list-inline pull-right">
<?php
if ($step > 1)
{
?>
<li><button type="button" class="btn btn-dark prev-step">Back</button></li>
<?php
}
if ($step >= 23)
{
?>
<li><button type="submit" class="btn btn-success btn-submit">Finalizar</button></li>
<?php
} else {
?>
<!-- <li><button type="button" class="default-btn next-step skip-btn">Skip</button></li> -->
<li><button type="button" class="btn btn-primary next-step">Continuar</button></li>
<?php } ?>
</ul>
</div>

<?php
}
?>
<div class="clearfix"></div>
</div> <!-- Table -->
</div> <!-- Tabs -->
</form> <!-- Form -->
</div> <!-- Wizard -->
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
