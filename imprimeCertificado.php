<?php

print_r($_GET);

$nomeCurso = $_GET['nomecurso'];
$aluno = $_GET['nome'];

require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf(['orientation' => 'L']);
$mpdf->SetDefaultBodyCSS('background', "url('modelo.jpg)");
$mpdf->SetDefaultBodyCSS('background-image-resize', 6);
$mpdf->SetDefaultBodyCSS('font-size', 26);
$mpdf->WriteFixedPosHTML($nomeCurso, 120, 50, 120, 120, 'auto');
$mpdf->WriteFixedPosHTML($aluno, 120, 80, 120, 120, 'auto');

$mpdf->Output();