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

?>

<div class="container" style="margin-top: 30px">
    <div class="row">

        <?php foreach ($cursos as $curso): ?>
            <div class="col-sm">
                <div class="card" style="width: 18rem;" style="margin-bottom: 5px">
                    <div class="card-body">
                        <h5 class="card-title"><?= $curso['nome'] ?></h5>
                        <p class="card-text">Descrição do curso</p>

                            <input type="submit" class="btn btn-primary" onclick="insere(<?php echo $_SESSION['idusuario'] ?>, <?php echo $curso['idcursos'] ?>)" value="Inscrever">

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
            url: 'http://localhost:8080/as/inscrever.php?iduser=' + iduser + '&idcurso=' + idcurso,
            dataType: 'html',
            success: function (data) {
                if(data == 1){
                    alert('Inscrito com sucesso!');
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