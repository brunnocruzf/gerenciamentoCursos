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

function porcentagem($idcurso){
    $username = 'root';
    $password = '';
    $iduser = $_SESSION['idusuario'];

    try {
        $conn = new PDO('mysql:host=localhost;dbname=as', $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stm = $conn->prepare('SELECT quantidade_aulas FROM `as`.cursos where idcursos = :idcurso');
        $stm->bindParam(':idcurso',$idcurso);
        $stm->execute();
        $qtdeAulas = $stm->fetch()[0];

        $stm = $conn->prepare('SELECT aulas_concluidas FROM `as`.usuarios_cursos where idusuario = :idusuario and idcurso = :idcurso');
        $stm->bindParam(':idusuario',$iduser);
        $stm->bindParam(':idcurso',$idcurso);
        $stm->execute();
        $status = $stm->fetch()[0];

        if($status == 0) {
            return 0;
        }else{
            return number_format((($status/$qtdeAulas) * 100),0,'.', '');
        }
    } catch(PDOException $e) {
        echo 'ERROR: ' . $e->getMessage();
    }
}

?>
<div class="container" style="margin-top: 30px">
    <div class="row" >

        <?php foreach ($cursos as $curso):
            ?>
            <div class="col-sm" style="margin-bottom: 50px">
                <div class="card" style="width: 18rem;" style="margin-bottom: 5px">
                    <div class="card-body">
                        <h5 class="card-title"><?= $curso['nome'] ?></h5>
                        <p class="card-text"><?= $curso['descCurso'] ?></p>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: <?= porcentagem($curso['idcurso'] ) ?>%;" aria-valuenow="<?= porcentagem($curso['idcurso'] ) ?>" aria-valuemin="0" style="font-color: black" aria-valuemax="100"><?= porcentagem($curso['idcurso'] ) ?>% concluido</div>
                        </div>
                        <br>
                        <a href="aulas.php?idcurso=<?= $curso['idcurso'] ?>&nome=<?= $curso['nome'] ?>" class="btn btn-primary" >Acessar Aulas</a>

                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
