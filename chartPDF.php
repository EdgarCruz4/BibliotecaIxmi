<?php
require('assets/fpdf/fpdf.php');
date_default_timezone_set('America/El_Salvador');
require 'assets/class/consultas.php';
$consultas = new consultas();
class PDF extends FPDF
{

    function Header()
    {
    }
    function Footer()
    {
    }
}
$months = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
$userName = $_POST['userName'];
$currentLibraryId = $_POST['currentLibraryId'];
$suggestions = $_POST['suggestions'];
$today = $_POST['today'];
$tyme = $_POST['tyme'];
if ($tyme == "Fecha de auditoria") {
    $partes = explode("-", $today);
    $numberMonth = $partes[0] - 1;
    $month = $months[$numberMonth];
    $year = $partes[1];
} else {
    $partes = explode("-", $tyme);
    $numberMonth = $partes[0] - 1;
    $month = $months[$numberMonth];
    $year = $partes[1];
}
$ruta = 'assets/';
$bodyText = "Resultados totales obtenidos en la auditoria " . $month . " " . $year;


$pdf = new FPDF('P', 'mm', 'A4');
$pdf->SetMargins(20, 20, 20, 20);
$pdf->AliasNbPages();

// Primera forma de hacerlo
$pdf->AddPage();

/* Añadimos el nuevo tipo de letra */
$pdf->AddFont('Anton-Regular', '', 'Anton-Regular.php');
/* Declaramos que queremos usar ese tipo de letra */
$pdf->SetFont('Arial', '', 25);
$title = "Biblioteca " . $userName;
/* Lo imprimimos */
$pdf->Cell(180, 10, $title, 0, 1, 'C', 0);

//  $pdf->image("assets/imagen/logo.png");

//  $barra=$_POST['bar'];
$pastel = $_POST['bar'];
$pdf->Ln();
$pdf->SetFont('Arial', '', 12);
$pdf->Cell(200, 10, $bodyText, 0, 50, 'L', 0);
$img1 = explode(',', $pastel, 2)[1];
$pic1 = 'data://text/plain;base64,' . $img1;
$pdf->image($pic1, 0, 60, 200, 70, 'png');

$pdf->Ln(90);
$pdf->Cell(200, 10, 'Observaciones y comentarios:', 0, 1, 'L', 0);
$pdf->MultiCell(0, 10, utf8_decode($suggestions));
$pdf->AddPage();

// impresión de cuestionario

$dataTest = $consultas->testResults($partes[0], $year, $currentLibraryId, $ruta);
foreach ($dataTest as $result) {
    $pdf->SetFont('Arial', 'B', 14);
    $pdf->SetTextColor(0, 0, 0); 
    if ($result['id'] <= 7) {
        if ($result['id'] == 1) {
            $pdf->MultiCell(0, 10, utf8_decode('Visión'));
        }
        casos($result['respuesta'], $result['pregunta'], $pdf);
    } elseif ($result['id'] <= 11) {
        if ($result['id'] == 8) {
            $pdf->MultiCell(0, 10, utf8_decode('Misión'));
        }
        casos($result['respuesta'], $result['pregunta'], $pdf);
    } elseif ($result['id'] <= 23) {
        if ($result['id'] == 12) {
            $pdf->MultiCell(0, 10, utf8_decode('Objetivos'));
        }
        casos($result['respuesta'], $result['pregunta'], $pdf);
    } elseif ($result['id'] <= 30) {
        if ($result['id'] == 24) {
            $pdf->MultiCell(0, 10, utf8_decode('Metas'));
        }
        casos($result['respuesta'], $result['pregunta'], $pdf);
    } elseif ($result['id'] <= 54) {
        if ($result['id'] == 31) {
            $pdf->MultiCell(0, 10, utf8_decode('Procesos'));
        }
        casos($result['respuesta'], $result['pregunta'], $pdf);
    } elseif ($result['id'] <= 78) {
        if ($result['id'] == 55) {
            $pdf->MultiCell(0, 10, utf8_decode('Procedimientos'));
        }
        casos($result['respuesta'], $result['pregunta'], $pdf);
    } elseif ($result['id'] <= 112) {
        if ($result['id'] == 79) {
            $pdf->MultiCell(0, 10, utf8_decode('Programas'));
        }
        casos($result['respuesta'], $result['pregunta'], $pdf);
    } elseif ($result['id'] <= 117) {
        if ($result['id'] == 113) {
            $pdf->MultiCell(0, 10, utf8_decode('Metas'));
        }
        casos($result['respuesta'], $result['pregunta'], $pdf);
    } elseif ($result['id'] <= 134) {
        if ($result['id'] == 118) {
            $pdf->MultiCell(0, 10, utf8_decode('Organización'));
        }
        casos($result['respuesta'], $result['pregunta'], $pdf);
    } elseif ($result['id'] <= 148) {
        if ($result['id'] == 135) {
            $pdf->MultiCell(0, 10, utf8_decode('División y distribución de funciones'));
        }
        casos($result['respuesta'], $result['pregunta'], $pdf);
    } elseif ($result['id'] <= 168) {
        if ($result['id'] == 149) {
            $pdf->MultiCell(0, 10, utf8_decode('Cultura organizacional'));
        }
        casos($result['respuesta'], $result['pregunta'], $pdf);
    } elseif ($result['id'] <= 179) {
        if ($result['id'] == 169) {
            $pdf->MultiCell(0, 10, utf8_decode('Recursos humanos'));
        }
        casos($result['respuesta'], $result['pregunta'], $pdf);
    } elseif ($result['id'] <= 190) {
        if ($result['id'] == 180) {
            $pdf->MultiCell(0, 10, utf8_decode('Reclutamiento, selección, contratación, inducción y socializacion'));
        }
        casos($result['respuesta'], $result['pregunta'], $pdf);
    } elseif ($result['id'] <= 194) {
        if ($result['id'] == 191) {
            $pdf->MultiCell(0, 10, utf8_decode('Normatividad'));
        }
        casos($result['respuesta'], $result['pregunta'], $pdf);
    } elseif ($result['id'] <= 197) {
        if ($result['id'] == 195) {
            $pdf->MultiCell(0, 10, utf8_decode('Renumeracion del personal'));
        }
        casos($result['respuesta'], $result['pregunta'], $pdf);
    } elseif ($result['id'] <= 212) {
        if ($result['id'] == 198) {
            $pdf->MultiCell(0, 10, utf8_decode('Capacitación y desarrollo'));
        }
        casos($result['respuesta'], $result['pregunta'], $pdf);
    } elseif ($result['id'] <= 220) {
        if ($result['id'] == 213) {
            $pdf->MultiCell(0, 10, utf8_decode('Seguridad e higiene'));
        }
        casos($result['respuesta'], $result['pregunta'], $pdf);
    } elseif ($result['id'] <= 224) {
        if ($result['id'] == 221) {
            $pdf->MultiCell(0, 10, utf8_decode('Evaluación del desempeño'));
        }
        casos($result['respuesta'], $result['pregunta'], $pdf);
    } elseif ($result['id'] <= 227) {
        if ($result['id'] == 225) {
            $pdf->MultiCell(0, 10, utf8_decode('Inteligencia emocional'));
        }
        casos($result['respuesta'], $result['pregunta'], $pdf);
    } elseif ($result['id'] <= 233) {
        if ($result['id'] == 228) {
            $pdf->MultiCell(0, 10, utf8_decode('Valores'));
        }
        casos($result['respuesta'], $result['pregunta'], $pdf);
    } elseif ($result['id'] <= 236) {
        if ($result['id'] == 234) {
            $pdf->MultiCell(0, 10, utf8_decode('Ética'));
        }
        casos($result['respuesta'], $result['pregunta'], $pdf);
    } elseif ($result['id'] <= 249) {
        if ($result['id'] == 237) {
            $pdf->MultiCell(0, 10, utf8_decode('Cambio organizacional'));
        }
        casos($result['respuesta'], $result['pregunta'], $pdf);
    } elseif ($result['id'] <= 259) {
        if ($result['id'] == 250) {
            $pdf->MultiCell(0, 10, utf8_decode('Instrumentos técnicos de apoyo'));
        }
        casos($result['respuesta'], $result['pregunta'], $pdf);
    }
}

$pdf->Output();

function casos($rest, $pregunta, $pdf)
{
    $pdf->SetFont('Arial', '', 12);
    $pdf->MultiCell(0, 10, utf8_decode($pregunta));
    $pdf->SetTextColor(70, 128, 255); 
    switch ($rest) {
        case 1:
            $respuesta = "Siempre";
            $pdf->MultiCell(0, 10,  "             > " . $respuesta);
            break;
        case 2:
            $respuesta = "Casi siempre";
            $pdf->MultiCell(0, 10,  "             > " . $respuesta);
            break;
        case 3:
            $respuesta = "Algunas veces";
            $pdf->MultiCell(0, 10,  "             > " . $respuesta);
            break;
        case 4:
            $respuesta = "Inexistente";
            $pdf->MultiCell(0, 10,  "             > " . $respuesta);
            break;
    }
}
