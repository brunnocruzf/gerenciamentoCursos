<?php
session_start();
$iduser = $_SESSION['idusuario'];
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

    $stm = $conn->prepare('SELECT aulas_concluidas FROM `as`.usuarios_cursos where idcurso = :idcurso and idusuario = :iduser;');

    $stm->bindParam(':idcurso', $idcurso);
    $stm->bindParam(':iduser', $iduser);
    $stm->execute();
    $qtde = $stm->fetch();
    $qtdeAulas = ($qtde['aulas_concluidas'] + 1);

    $stm = $conn->prepare('update usuarios_cursos set aulas_concluidas = :status where idcurso = :idcurso and idUsuario = :iduser;');
    $stm->bindParam(':status', $qtdeAulas);
    $stm->bindParam(':idcurso', $idcurso);
    $stm->bindParam(':iduser', $iduser);
    $stm->execute();

    echo 1;

} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
