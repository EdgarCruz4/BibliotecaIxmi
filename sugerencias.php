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
<h5 class="m-b-10"><?php echo($_SESSION['nameUser']); ?></h5>
</div>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="index.php"><i class="feather icon-home"></i></a>
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
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ingresar sugerencia</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

  <form method="post" enctype="multipart/form-data" class=" justify-content-between p-2" id="upload-file-form">
  <div class="form-group">
    <label for="Comentario">Comentario</label>
    <input type="text" class="form-control" id="Comentario" placeholder="Escribe el comentario">
    <br>
    <label for="Comentario">Archivo (opcional)</label>
  </div>
  
      <div class="input-group col-md-4 m-1">
      <!-- <input type="file" class="form-control" aria-label="Upload"> -->
     <div class="custom-file">
    
     <label class="custom-file-label" for="upload-btn"></label>
     <input type="file" name="files[]" multiple class="custom-file-input" id="upload-btn" required>
       
      </div>
      <button class="btn btn-primary" type="submit">Subir</button>
        </div>
  </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary">Crear sugerencia</button>
      </div>
    </div>
  </div>
</div>
 </div><!--termina la Modal -->



<div class="card-body p-5">
<div class="container">
  <div class="row">

<div class="col-lg-6 mx-auto">
<div class="card">
<div class="card-header">
<!-- Featured -->
</div>
<div class="card-body p-4">
<!-- <h5 class="card-title">Special title treatment</h5>
<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
<a href="#" class="btn btn-primary">Go somewhere</a> -->
<div class="form-group">
<textarea readonly style="background: none; resize:none;" rows="5" class="form-control border-0" aria-label="With textarea">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In euismod nunc et aliquam auctor. Nulla maximus vitae ante eget faucibus. Aliquam porta tortor elit, sed convallis dolor sagittis in. Curabitur aliquam id nunc a pellentesque. Aenean eget rutrum diam. Aenean felis dui, finibus vel elementum ac, suscipit finibus libero.
</textarea>
</div>
<div class="d-flex flex-row">
<b>Archivo</b>
</div>
<form action="" method="post">
<div class="d-flex flex-row justify-content-between">
<p>documento.pdf</p>
<button type="submit" class="btn btn-primary">Descargar</button>
</div>
</form>
</div>
<div class="card-footer text-muted">
2 days ago
</div>
</div>
</div>

<div class="col-lg-6 mx-auto">
<div class="card">
<div class="card-header">
<!-- Featured -->
</div>
<div class="card-body p-4">
<!-- <h5 class="card-title">Special title treatment</h5>
<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
<a href="#" class="btn btn-primary">Go somewhere</a> -->
<div class="form-group">
<textarea readonly style="background: none; resize:none;" rows="5" class="form-control border-0" aria-label="With textarea">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In euismod nunc et aliquam auctor. Nulla maximus vitae ante eget faucibus. Aliquam porta tortor elit, sed convallis dolor sagittis in. Curabitur aliquam id nunc a pellentesque. Aenean eget rutrum diam. Aenean felis dui, finibus vel elementum ac, suscipit finibus libero.
</textarea>
</div>
<div class="d-flex flex-row">
<b>Archivo</b>
</div>
<form action="" method="post">
<div class="d-flex flex-row justify-content-between">
<p>documento.pdf</p>
<button type="submit" class="btn btn-primary">Descargar</button>
</div>
</form>
</div>
<div class="card-footer text-muted">
2 days ago
</div>
</div>
</div>



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
</body>

</html>