<?php
include ('menu.php');

$username = 'root';
$password = '';

$iduser = $_SESSION['idusuario'];

try {
    $conn = new PDO('mysql:host=localhost;dbname=as', $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stm = $conn->prepare('SELECT u.*, c.* FROM usuarios_cursos as u inner join cursos as c on u.idCurso = c.idcursos where u.idUsuario = :iduser;');
    $stm->bindParam(':iduser',$iduser);
    $stm->execute();
    $cursos = $stm->fetchAll();

} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
?>
<div class="container" style="margin-top: 30px">
    <div class="row" >

        <?php foreach ($cursos as $curso):?>
            <div class="col-sm">
                <div class="card" style="width: 18rem;" style="margin-bottom: 5px">
                    <div class="card-body">
                        <h5 class="card-title"><?= $curso['nome'] ?></h5>
                        <p class="card-text">Descrição do curso</p>
                        <a href="aulas.php?idcurso=<?= $curso['idcurso'] ?>&nome=<?= $curso['nome'] ?>" class="btn btn-primary" >Acessar Aulas</a>

                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
