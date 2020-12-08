<?php

$idcurso = $_GET['idcurso'];

$username = 'root';
$password = '';

try {
    $conn = new PDO('mysql:host=localhost;dbname=as', $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



    $stm = $conn->prepare('SELECT * FROM `as`.usuarios_cursos where idcurso = :idcurso');
    $stm->bindParam(':idcurso',$idcurso);
    $stm->execute();
    $possuiUser = $stm->rowCount();

    if($possuiUser >= 1){
        return "Curos possui alunos inscritos";
    }else{
        $stm = $conn->prepare('delete from cursos where idcursos = :idcurso');
        $stm->bindParam(':idcurso',$idcurso);
        $stm->execute();
        echo 1;
    }
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
