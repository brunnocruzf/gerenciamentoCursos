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
            <div class="col-sm" style="margin-bottom: 50px">
                <div class="card" style="width: 18rem;" style="margin-bottom: 5px">
                    <div class="card-body">
                        <h5 class="card-title"><?= $curso['nome'] ?></h5>
                        <p class="card-text"><?= $curso['descCurso'] ?></p>

                        <input type="submit" class="btn btn-danger" onclick="deleta(<?php echo $curso['idcursos'] ?>,'<?php echo $curso['nome'] ?>')" value="Excluir">

                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<script>
    function deleta(idcurso,nomecurso) {
        if (window.confirm("Você realmente excluir curso "+nomecurso+"?")) {
          $.ajax({
                type: "GET",
                url: 'http://localhost:8080/as/excluiCurso.php?idcurso=' + idcurso,
                dataType: 'html',
                success: function (data) {
                    if(data == 1){
                        alert('Excluido com sucesso!');
                        document.location.reload(true);
                    }else {
                        this.error();
                    }
                },
                error: function (data) {
                    console.log(data);
                    alert("Erro ao excluir, Curso possui alunos inscritos.");
                }
            });
        }
    }
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>