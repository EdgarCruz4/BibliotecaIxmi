<!DOCTYPE html>
<html lang="es">

<head>
    <title>Archivos</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="Phoenixcoded" />
    <!-- Favicon icon -->
    <link rel="icon" href="../assets/images/favicon.ico" type="image/x-icon">
    <!-- vendor css -->
    <link rel="stylesheet" href="../assets/css/style.css">

</head>

<body class="">
    <!-- Menu start -->
    <?php
    include_once 'menu.php';
    $today = date('Y-m-d');
    $time = date('h:i:s');
    require_once('../backend/functions.php');
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
                                <h5 class="m-b-10"><?php echo(@$_SESSION['nameUser']); ?></h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="../bibliotecas.php"><i class="feather icon-home"></i></a>
                                </li>
                                <li class="breadcrumb-item"><a href="#!">Archivos</a></li>
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
                            <h5>Lista de archivos</h5>
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
                                <div class="card-body p-0">

                                <div class="row justify-content-between p-2">
                                    <form method="post" class="input-group col-md-4 m-1">
                                        <input type="text" class="form-control" name="search" placeholder="Buscar archivo">
                                        <button type="submit" class="btn btn-primary">Buscar</button>
                                    </form>
                                    <form method="post" enctype="multipart/form-data" class="input-group col-md-4 m-1" id="upload-file-form">
                                        <div class="custom-file">
                                            <input type="file" name="files[]" multiple class="custom-file-input" id="upload-btn" required>
                                            <label class="custom-file-label" for="upload-btn">Elegir archivo...</label>
                                        </div>
                                        <input type="hidden" name="id_biblioteca" value="<?php echo (strval($id_biblioteca)); ?>">
                                        <button class="btn btn-primary" type="submit">Subir</button>
                                    </form>
                                </div>

                                <div id="progress-bar" class="progress m-l-5 m-r-5" style="display: none; height: 20px;">
                                    <div id="upload-progress"
                                        class="progress-bar progress-bar-striped progress-bar-animated"
                                        style="height: 20px;" role="progressbar" style="width: 0%;" aria-valuenow="0"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>


<div class="input-group m-10"></div>
<div class="table-responsive">
<table class="table table-hover mb-0">
<thead>
<tr>
<th>
<div class="chk-option">
<label
class="check-task custom-control custom-checkbox d-flex justify-content-center done-task">
<input type="checkbox" class="custom-control-input">
<span class="custom-control-label"></span>
</label>
</div>
</th>
<th>Nombre</th>
<th>Fecha</th>
<th>Biblioteca</th>
<th class="text-right">Acción</th>
</tr>
</thead>
<tbody>
<?php
function getResults($rows)
{
    while ($row = mysqli_fetch_object($rows)) {
?>

<tr>
<td>
<div class="chk-option">
<label
class="check-task custom-control custom-checkbox d-flex justify-content-center done-task">
<input type="checkbox" class="custom-control-input">
<span class="custom-control-label"></span>
</label>
</div>
</td>
<td><?php echo ($row->nombre); ?></td>
<td><?php echo ($row->fecha); ?></td>
<td><?php echo ($row->biblioteca); ?></td>
<td class="text-right">
<form method="POST" action="../backend/download.php">
<button type="submit" class="btn btn-primary btn-sm btn-download">Descargar</button>
<input type="hidden" name="filename" value="<?php echo ($row->nombre); ?>">
</form>
<button type="button" data-id="<?php echo ($row->id); ?>"
data-name="<?php echo ($row->nombre); ?>"
class="btn btn-danger btn-sm btn-delete">Eliminar</button>
</td>
</tr>

<?php
    }
}
?>

<?php
if (!empty($_POST['search'])) {
    require_once('../backend/functions.php');
    $search = $_POST['search'];
    $rows = db_query("SELECT archivos.id AS id, archivos.nombre AS nombre, archivos.fecha AS fecha, bibliotecas.nombre AS biblioteca FROM archivos INNER JOIN bibliotecas ON archivos.id_biblioteca = bibliotecas.id_biblioteca WHERE archivos.nombre LIKE '%" . $search . "%' AND archivos.id_biblioteca = " . $id_biblioteca);
    getResults($rows);
}
else
{
    require_once('../backend/functions.php');
    $rows = db_query("SELECT archivos.id AS id, archivos.nombre AS nombre, archivos.fecha AS fecha, bibliotecas.nombre AS biblioteca FROM archivos INNER JOIN bibliotecas ON archivos.id_biblioteca = bibliotecas.id_biblioteca WHERE archivos.id_biblioteca = " . $id_biblioteca);
    getResults($rows);
}
?>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
    <!-- Modal -->
    <div class="modal fade" id="modal-message" data-backdrop="static" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
    <h5 class="modal-title"></h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
    </div>
    <div class="modal-body">
    </div>
    <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">OK</button>
    </div>
    </div>
    </div>
    </div>
</div>
</div>
    <!-- [ Main Content ] end -->
<script>

document.querySelector('#upload-file-form').addEventListener('submit', async (e) =>
{
    e.preventDefault();
    var formData = new FormData(e.target);
    // URL.createObjectURL(blob);
    formData.append('function', 'upload');
    let file = formData.get('files[]');
    formData.append('nombre', file.name);
    formData.append('archivo', 'src/archivos/' + file.name);
    if (await uploadFiles(formData)) fetch('../backend/api.php', { method:'POST', body:formData })
    .then(response => response.json())
    .then(response => {
        console.log(response);
        window.location.replace(window.location.href);
    })
    .catch(error => console.log(error));
});

async function uploadFiles(formData) {
    let isUploaded = false;
    await fetch('../backend/upload.php', { method: 'POST', body: formData })
    .then(response => response.json())
    .then(response => {
        isUploaded = response[0].status == 'ok';
    })
    .catch(error => {
        console.log(error);
        isUploaded = false;
    });
    formData.delete('files[]');
    return isUploaded;
}

document.querySelectorAll('.btn-delete').forEach(btn => {
    btn.addEventListener('click', (e) => {

        if(!confirm('Borrar?')) return;

        let formData = new FormData();
        let id_archivo = btn.getAttribute('data-id');
        let filename = btn.getAttribute('data-name');

        formData.append('function', 'delete');
        formData.append('id_archivo', id_archivo);
        formData.append('filename', filename);

        fetch('../backend/api.php', {method: 'POST', body: formData })
        .then(response => response.json())
        .then(response => {
            if (response.status == 'ok')
            {
                $('#modal-message').on('shown.bs.modal', function(e) {
                    $('#modal-message .modal-body').html('Archivo borrado.');
                }).on('hidden.bs.modal', function (e) {
                    window.location.replace(window.location.href);
                }).modal('show');
            }
        })
        .catch(error => console.log(error));
    });
});
</script>
</body>
</html>