<?php

$iduser = $_GET['iduser'];
$idcurso = $_GET['idcurso'];


$username = 'root';
$password = '';

try {
    $conn = new PDO('mysql:host=localhost;dbname=as', $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stm = $conn->prepare('insert into usuarios_cursos (idUsuario,idcurso,aulas_concluidas)
                        values(:idUsuario, :idcurso, 0);');

    $stm->bindParam(':idUsuario',$iduser);
    $stm->bindParam(':idcurso',$idcurso);

    $stm->execute();

    echo 1;

} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
