<?php
include ('menu.php');
$username = 'root';
$password = '';

$iduser = $_SESSION['idusuario'];

try {
    $conn = new PDO('mysql:host=localhost;dbname=as', $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stm = $conn->prepare('SELECT c.nome as nomecurso, c.*,u.*, uc.* FROM usuarios_cursos uc
            inner join usuarios u on u.idusuarios = uc.idUsuario 
            inner join cursos c on c.idcursos = uc.idcurso
             where c.quantidade_aulas = uc.aulas_concluidas and idusuarios = :iduser;');
    $stm->bindParam(':iduser',$iduser);
    $stm->execute();
    $certificados = $stm->fetchAll();

} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}

?>


<div class="container" style="margin-top: 30px">
    <div class="row">
        <?php foreach ($certificados as $certificado): ?>
            <div class="col-sm">
                <div class="card" style="width: 18rem;" style="margin-bottom: 5px">
                    <div class="card-body">
                        <h5 class="card-title"><?= $certificado['nomecurso'] ?></h5>
                        <p class="card-text"><?= $certificado['descCurso'] ?></p>

                        <a type="submit" target="_blank" class="btn btn-primary" href="imprimeCertificado.php?nomecurso=<?= $certificado['nomecurso'] ?>&nome=<?= $certificado['nome'] ?>">Certificado</a>

                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
