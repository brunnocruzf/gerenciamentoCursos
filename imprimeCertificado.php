<?php

print_r($_GET);

$nomeCurso = '<p><b>'.strtoupper($_GET['nomecurso']).'</b></b></p>';
$aluno = $_GET['nome'];

require_once __DIR__ . '/vendor/autoload.php';
$stylesheet = file_get_contents('style.css');
$mpdf = new \Mpdf\Mpdf(['orientation' => 'L']);
$mpdf->WriteHTML($stylesheet,\Mpdf\HTMLParserMode::HEADER_CSS);
$mpdf->SetDefaultBodyCSS('background', "url('modelo.jpg)");
$mpdf->SetDefaultBodyCSS('background-image-resize', 6);
$mpdf->SetDefaultBodyCSS('font-size', 30);
$mpdf->WriteFixedPosHTML($nomeCurso, 125, 35, 220, 150, 'auto');
$mpdf->WriteFixedPosHTML($aluno, 130, 95, 170, 120, 'auto');

$mpdf->Output();