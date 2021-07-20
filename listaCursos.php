<?php
include('menu.php');

$username = 'root';
$password = '';
try {
    $conn = new PDO('mysql:host=localhost;dbname=as', $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stm = $conn->prepare('select * from cursos');

    $stm->execute();

    $cursos = $stm->fetchAll();

} catch (PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}

function verificaincricao($idcurso)
{
    $iduser = $_SESSION['idusuario'];

    $username = 'root';
    $password = '';
    try {
        $conn = new PDO('mysql:host=localhost;dbname=as', $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stm = $conn->prepare('SELECT * FROM `as`.usuarios_cursos where idUsuario = :iduser and idcurso = :idcurso;');

        $stm->bindParam(':iduser', $iduser);
        $stm->bindParam(':idcurso', $idcurso);

        $stm->execute();

        return $stm->rowCount();

    } catch (PDOException $e) {
        echo 'ERROR: ' . $e->getMessage();
    }
}

?>

<div class="container" style="margin-top: 30px">
    <div class="row">

        <?php foreach ($cursos as $curso):
            ?>
            <div class="col-sm" style="margin-bottom: 40px">
                <div class="card" style="width: 18rem;" style="margin-bottom: 5px">
                    <div class="card-body">
                        <h5 class="card-title"><?= $curso['nome'] ?></h5>
                        <p class="card-text"><?= $curso['descCurso'] ?></p>
                        <?php if(verificaincricao($curso['idcursos']) == 1): ?>
                            <input type="submit" readonly disabled class="btn btn-danger" value="Inscrito">
                        <?php elseif (verificaincricao($curso['idcursos']) == 0): ?>
                            <input type="submit" readonly class="btn btn-primary" onclick="insere(<?php echo $_SESSION['idusuario'] ?>, <?php echo $curso['idcursos'] ?>)" value="Inscrever">
                        <?php endif;?>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<script>

    function insere(iduser, idcurso) {
        console.log(iduser, idcurso);
       $.ajax({
            type: "GET",
            url: 'http://localhost/cursos/inscrever.php?iduser=' + iduser + '&idcurso=' + idcurso,
            dataType: 'html',
            success: function (data) {
                if(data == 1){
                    alert('Inscrito com sucesso!');
                    document.location.reload(true);
                }else {
                    this.error();
                }
            },
            error: function () {
                alert("Erro ao inserir.");
            }
        });
    }
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>