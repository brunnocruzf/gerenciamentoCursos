<?php

$idaula = $_GET['idaula'];
$idcurso = $_GET['idcurso'];
$true = 'true';

$username = 'root';
$password = '';

try {
    $conn = new PDO('mysql:host=localhost;dbname=as', $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stm = $conn->prepare('update aulas set aulascol = :true where idaulas = :idaula');

    $stm->bindParam(':true',$true);
    $stm->bindParam(':idaula',$idaula);

    $stm->execute();

    $stm = $conn->prepare('SELECT status FROM `as`.cursos where idcursos = :idcurso;');

    $stm->bindParam(':idcurso',$idcurso);
    $stm->execute();
    $qtde = $stm->fetch();
    $qtdeAulas = ($qtde['status'] + 1);


    $stm = $conn->prepare('update cursos set status= :status where idcursos = :idcurso;');
    $stm->bindParam(':status', $qtdeAulas);
    $stm->bindParam(':idcurso', $idcurso);
    $stm->execute();

    echo 1;

} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
