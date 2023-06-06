<?php
require 'assets/class/consultas.php';
$consulta = new consultas();
$name = $consulta->session_star_menu();
$name = $consulta->getLibrary();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <title>Bibliotecas</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="Phoenixcoded" />
    <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <!-- Css personalizado -->
    <link href="assets/css/styleGalery.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/myStyle.css">
    <!-- Stilos para animación -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

</head>

<body class="" style="background-color: #ecf0f5;">
    <div class="text-center pt-4" style="background-color: #4680ff; height: 130px; border-radius: 5px;">
        <h1 class="font-weight-bold text-white">Sistema administrativo de auditorias </h1>
        <h4>
            <p class="font-weight-normal text-white">Ixmiquilpan</p>
        </h4>
    </div>
    <div class="container">
        <div class="row mt-4 mb-4">
            <div class="col">
                <div class="card">
                    <div class="card-header text-left">
                        <h5>Bibliotecas:</h5>
                    </div>
                    <!-- ======= Portfolio Section ======= -->
                    <section id="portfolio" class="portfolio">

                        <div class="container" data-aos="fade-up">

                            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                                <?php
                                foreach ($name as $resul) {
                                ?>
                                    <div class="col-lg-4 col-md-6 portfolio-item filter-app" data-aos="fade-up">
                                        <h5 class="text-center"><?php echo $resul['nombre']; ?></h5>
                                        <div class="portfolio-wrap">
                                            <img style="width: 100%; height: 40vh; object-fit:cover;" src="<?php echo($resul['foto_miniatura']) ?>" class="img-fluid lazy embed-responsive-4by3" alt="">
                                            <div class="portfolio-links">
                                                <form action="admin/sugerencias.php" method="post">
                                                <input type="hidden" name="foto_miniatura" value="<?php echo($resul['foto_miniatura']) ?>">
                                                <button type="submit" name="currentLibraryId" value="<?php echo $resul['id_biblioteca']; ?>" style="background: none; border: none; background-color: white; border-radius: 100%; width: 30px; height: 30px;"><i class="bi bi-link"></i></button>
                                                </form>
                                            </div>
                                            <div class="portfolio-info">
                                            </div>
                                        </div>
                                    </div>

                                <?php
                                }
                                ?>

                            </div>

                        </div>
                    </section><!-- End Portfolio Section -->
                </div>
            </div>
        </div>
    </div>
    <div id="container-floating">
        <div id="floating-button">
            <a href="#" class="close" id="buttonExit"><i class="fas fa-sign-out-alt exitIcon"></i></a>
        </div>
    </div>

</body>
<!-- Iconos de fontawesome -->
<script src="https://kit.fontawesome.com/b0b8de238a.js" crossorigin="anonymous"></script>
<!-- Animación -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<!-- Jquery -->
<script src="assets/js/vendor-all.min.js"></script>
<script src="assets/js/plugins/bootstrap.min.js"></script>
<script src="assets/js/ripple.js"></script>
<script src="assets/js/pcoded.min.js"></script>
<!-- Scripts propios -->
<script src="assets/js/exit.js"></script>

</html>