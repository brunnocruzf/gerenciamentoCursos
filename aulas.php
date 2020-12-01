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
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<h1>Curso <?= $nome ?></h1>



<ul class="nav nav-tabs">
    <?php foreach ($aulas as $aula):?>
        <li><a data-toggle="tab" href="#<?= $aula['aula'] ?>"><?= $aula['aula'] ?></a></li>
    <?php endforeach;?>
</ul>

<div class="tab-content">
<?php foreach ($aulas as $aula): ?>
    <div id="<?= $aula['aula'] ?>" class="tab-pane fade">
        <h3><?= $aula['aula'] ?></h3>
        <p>Conteudo da aula</p>
        <?php
        if($aula['aulascol'] == true):?>
            <input name="concluida" type="checkbox" checked> <label for="concluida" checked><a href="#">concluida</a> </label></input>
        <?php else: ?>
            <input name="concluida" type="checkbox"> <label for="concluida" checked><a href="#" onclick="concluida(<?= $aula['idaulas'] ?>,<?= $aula['idCurso'] ?>)">concluida</a> </label></input>
        <?php endif ?>
    </div>
    <?php endforeach;?>
</div>
</div>
<script>
    function concluida(idaula,idcurso) {
        console.log(idaula);
        $.ajax({
            type: "GET",
            url: 'http://localhost:8080/as/concluiAula.php?idaula='+idaula+'&idcurso='+idcurso,
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
