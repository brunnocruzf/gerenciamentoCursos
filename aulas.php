<?php
include ('menu.php');

$idcurso = $_GET['idcurso'];
$nome = $_GET['nome'];

$username = 'root';
$password = '';

try {
    $conn = new PDO('mysql:host=localhost;dbname=as', $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stm = $conn->prepare('select * from aulas where idCurso = :idcurso;');
    $stm->bindParam(':idcurso',$idcurso);
    $stm->execute();
    $aulas = $stm->fetchAll();
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}

?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="all.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
<link rel="stylesheet" type="text/css" href="all.css" media="screen" />
<link rel="stylesheet" type="text/css" href="fontawesome.css" media="screen" />
<link rel="stylesheet" type="text/css" href="font-awesome.css" media="screen" />
<h1>Curso <?= $nome ?></h1>


<div class="row">
    <div class="col-2">
        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <?php foreach ($aulas as $aula):?>
                <a class="nav-link" id="v-pills-home-tab" data-toggle="pill" href="#<?= $aula['idaulas'] ?>" role="tab" aria-controls="v-pills-home" aria-selected="true"><?= $aula['aula'] ?></a>
            <?php endforeach;?>
        </div>
    </div>
    <div class="col-9">
        <div class="tab-content" id="v-pills-tabContent">
            <?php foreach ($aulas as $aula):?>
                <div class="tab-pane fade" id="<?= $aula['idaulas'] ?>" role="tabpanel" aria-labelledby="<?= $aula['idaulas'] ?>">
                    <h3><?= $aula['aula'] ?></h3>
                    <p><?= $aula['descricao'] ?></p>
                    <?= $aula['url'] ?>
                    <?php
                    if($aula['aulascol'] == 0):?>
                        <input name="concluida" type="checkbox" checked> <label for="concluida" checked><a href="#">concluida</a> </label></input>
                    <?php else: ?>
                        <input name="concluida" type="checkbox"> <label for="concluida"><a href="#" onclick="concluida(<?= $aula['idaulas'] ?>,<?= $aula['idCurso'] ?>)">concluida</a> </label></input>
                    <?php endif ?>
                </div>
            <?php endforeach;?>
        </div>
    </div>
</div>

<script>
    function concluida(idaula,idcurso) {
        console.log(idaula,idcurso);
        $.ajax({
            type: "GET",
            url: 'http://localhost/cursos/concluiAula.php?idaula='+idaula+'&idcurso='+idcurso,
            dataType: 'html',
            success: function (data) {
                if(data == 1){
                    alert('Concluida com sucesso!');
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
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
