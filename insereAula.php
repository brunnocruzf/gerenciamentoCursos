<?php
include ('menu.php');
$username = 'root';
$password = '';

$idcurso = $_GET['idcurso'];
$aula = $_GET['nome'];
$idcurso = intval($idcurso);

try {
    foreach ($aula as $cada){
        $conn = new PDO('mysql:host=localhost;dbname=as', $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stm = $conn->prepare('insert into aulas (idCurso, aula)
                        values(:idcurso,:aula);');

        $stm->bindValue(':idcurso',$idcurso);
        $stm->bindValue(':aula', $cada);

        $stm->execute();
    }
    echo "Aulas incluidas com sucesos.";
} catch (PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}

echo '<br><a class="btn btn-primary" href="cadCurso.php">Voltar</a>';