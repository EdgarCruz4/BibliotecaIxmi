<!DOCTYPE html>
<html lang="es">

<head>
<title>Sugerencías</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="description" content="" />
<meta name="keywords" content="">
<meta name="author" content="Phoenixcoded" />
<!-- vendor css -->
<link rel="stylesheet" href="../assets/css/style.css">

</head>

<body class="">
<!-- Menu start -->
<?php
include_once 'menu.php';
$today = date('Y-m-d');
$time = date('h:i:s');
$_POST = array();
?>
<!-- Menu end -->

<!-- Confirm Modal -->
<div class="modal fade" id="confirm-modal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Confirmar</h5>
      </div>
      <div class="modal-body">
      <h6>Borrar?</h6>
      </div>
      <div class="modal-footer">
        <form id="form-delete-modal">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary" id="btn-delete">Si</button>
       </form>
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
<h5 class="m-b-10"><?php echo ($_SESSION['nameUser']); ?></h5>
</div>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="../bibliotecas.php"><i class="feather icon-home"></i></a>
</li>
<li class="breadcrumb-item"><a href="#!">Sugerencías</a></li>

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
<h5>Sugerencías</h5>
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
<br>

<div class="col-md-auto">
 <!-- Button trigger modal -->
<button type="button" class="btn btn-outline-primary btn-sm float-right" data-toggle="modal" data-target="#exampleModal"><i class="fa-solid fa-comments fa-lg" title="Sugerencia"></i> 
&nbsp Nueva sugerencia
</button>

<!-- Modal -->
  <form method="post" enctype="multipart/form-data" class="was-validated justify-content-between p-2" id="sugerencias-form">
<div class="modal fade" id="exampleModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ingresar sugerencia</h5>
      </div>

<div class="modal-body">
  <div class="form-group">
  <label for="comentario">Sugerencia</label>
  <textarea minlength="60" maxlength="240" required class="form-control" id="comentario" name="sugerencia" rows="3" placeholder="Escribe una sugerencia mayor a 60 caracteres"></textarea>
  <div class="invalid-feedback">
  Campo requerido.
  </div>
  <div class="valid-feedback">
  Correcto.
  </div>
  </div>

<div class="form-group">
 <label>Archivo (opcional)</label>
</div>
  
  <div class="input-group">
  <input type="file" name="files[]" class="custom-file-input" id="input-files">
  <label class="custom-file-label" for="input-files">Selecciona un archivo...</label>
  <div class="invalid-feedback">Ocurrio un error al subir el archivo.</div>
  </div>

<div class="form-group my-2">
<div class="progress">
  <div class="progress-bar progress-bar-striped progress-bar-animated" id="upload-progress" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
</div>
</div>

</div>
      <div class="modal-footer">
        <input type="hidden" name="fk_id_biblioteca" value="<?php echo(strval($id_biblioteca)); ?>">
        <button type="button" class="btn btn-secondary" id="btn-abort" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Crear sugerencia</button>
      </div>
    </div>
  </div>
</div>
</form>

 </div><!--termina la Modal -->

<div class="card-body p-5">
<div class="container">
<div class="row">

<?php
require_once("../backend/functions.php");
$rows = queryAll("sugerencias", "WHERE mostrar=1 AND fk_id_biblioteca=" . strval($id_biblioteca));
while ($row = mysqli_fetch_object($rows))
{
?>

<div class="col-lg-6">
<div class="card" style="height: 360px;">
<div class="card-header">

<button type="button" data-file="<?php echo($row->archivo); ?>" data-id="<?php echo($row->id_sugerencia); ?>" class="bg-transparent border-0 btn-borrar" aria-label="borrar" style="float: right;">
<span aria-hidden="true">&times;</span>
</button>

</div>
<div class="card-body p-4">
<!-- <h5 class="card-title">Special title treatment</h5>
<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
<a href="#" class="btn btn-primary">Go somewhere</a> -->
<div class="form-group">
<textarea readonly style="background: none; resize:none;" rows="5" class="form-control border-0" aria-label="With textarea">
<?php echo($row->sugerencia); ?>
</textarea>
</div>
<?php
if (!empty($row->archivo))
{
?>
<div class="d-flex flex-row">
<b>Archivo</b>
</div>
<form action="../backend/download.php" method="post">
<div class="d-flex flex-row justify-content-between">
<p style="width: 70%; overflow: hidden; white-space: nowrap; text-overflow: ellipsis;" title="<?php echo(basename($row->archivo)); ?>" ><?php echo(basename($row->archivo)); ?></p>
<input type="hidden" name="filename" value="<?php echo (basename($row->archivo)) ?>">
<button type="submit" class="btn btn-primary">Descargar</button>
</div>
</form>
<?php } ?>
</div>
<div class="card-footer text-muted">
<?php echo($row->fecha); ?>
</div>
</div>
</div>

<?php
}
?>


</div>
</div>
</div>
</div>
</div>
</div>
<!-- [ Main Content ] end -->
</div>
</div>
<!-- [ Main Content ] end -->

<script>
document.querySelector('#sugerencias-form').addEventListener('submit', async (e) =>
{
  e.preventDefault();
  let formData = new FormData(e.target);
  formData.append("function", "sugerencia");

  if (formData.get('files[]').name.trim() != '')
  {
    formData.append('archivo', formData.get('files[]').name.replace(' ', '_'));
    document.querySelector('#sugerencias-form [type="submit"]').setAttribute('disabled', 'true');
    await postData(formData);

    await uploadFiles(formData);
  }
  else postData(formData);
});


async function postData(formData)
{
  await fetch("../backend/api.php", {
  body: formData,
  method: 'POST'
  }).then (response => { return response.json(); })
  .then (data => {
  if (data.status == 'ok')
  {
    setTimeout(() => {
    document.querySelector('#sugerencias-form [type="submit"]').removeAttribute('disabled');
    $('#exampleModal').modal('hide');
    window.location.replace(window.location.href);
    }, 2000);
  }
  }).catch (error => {
  console.error(error);
  });
}


function uploadFiles(formData)
{
  var request = new XMLHttpRequest();
  // request.timeout = 180000; // 3 minutes
  request.open('POST', '../backend/upload.php', true);
  request.send(formData);

  request.onload = function() {
    if (request.readyState === XMLHttpRequest.DONE && request.status == 200) {
      // The request has been completed successfully
      console.log('upload complete.');
    }
  }

  request.onprogress = function(e) {
    let ps = ((e.loaded / e.total) * 100).toFixed(2);
    $('#upload-progress').html(`${ps}%`).width(`${ps}%`);
  }

  request.onerror = function(e) {
    console.log(e);
    $('#input-files').addClass('is-invalid');
  }

  request.onabort = function() {
    console.log('upload aborted...');
    $('#input-files').addClass('is-invalid');
  }

  request.ontimeout = () => {
    console.log('timeout');
    $('#input-files').addClass('is-invalid');
  }

  document.querySelector('#btn-abort').addEventListener('click', (e) => {
    request.abort();
  });
}


window.onload = function()
{

$('#exampleModal').on('show.bs.modal', (e) => {
document.querySelector('#sugerencias-form').reset();
$('#upload-progress').width('0%');
$('#input-files').removeClass('is-invalid');
});

  // document.querySelector('#sugerencias-form [type="file"]').addEventListener('change', (e) => {
  //   for (const file of e.target.files) {
  //     console.log(file.name);
  //     document.querySelector('#sugerencias-form [type="submit"]').setAttribute('disabled', 'true')
  //   }
  // });

  document.querySelector('#form-delete-modal').addEventListener('submit', (e) =>
  {
    e.preventDefault();
    var modal = $('#confirm-modal');
    let id = modal.find('#btn-delete').attr('data-id');
    let file = modal.find('#btn-delete').attr('data-file');
    let formData = new FormData();
    formData.append("function", "deleteById");
    formData.append("id_sugerencia", id);
    formData.append("archivo", file);

    fetch('../backend/api.php', {
    body: formData,
    method: 'POST'
    }).then(response => response.json())
    .then(response => {
    modal.modal('hide');
    window.location.replace(window.location.href);
    }).catch(error => console.log(error));
  });

  document.querySelectorAll('.btn-borrar').forEach(btn =>
  {
    btn.addEventListener('click', () => {
    var modal = $('#confirm-modal');
    modal.find('#btn-delete').attr('data-id', btn.getAttribute('data-id'));
    modal.find('#btn-delete').attr('data-file', btn.getAttribute('data-file'));
    modal.modal('show');
    });
  });
}

</script>

</body>

</html>