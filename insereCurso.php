<?php
include('menu.php');
$username = 'root';
$password = '';

$curso = $_GET['curso'];
$qntdeAulas = $_GET['qntdeAulas'];
$descCurso = $_GET['descCurso'];

try {
    $conn = new PDO('mysql:host=localhost;dbname=as', $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stm = $conn->prepare('insert into cursos (nome,quantidade_aulas,status,descCurso)
                        values(:curso, :qntdeAulas, "ativo",:descCurso);');

    $stm->bindParam(':curso',$curso);
    $stm->bindParam(':qntdeAulas',$qntdeAulas);
    $stm->bindParam(':descCurso',$descCurso);

    $stm->execute();

    $stm = $conn->prepare('select idcursos from cursos where nome = :curso');
    $stm->bindParam(':curso',$curso);
    $stm->execute();
    $idcurso = $stm->fetch();

    $cursoId = $idcurso['idcursos'];


     $i = 0;
    echo "<form action='insereAula.php' method='get' style='margin-left: 40px; margin-top: 15px'>
           <input type='hidden' name='idcurso' value='$cursoId'>";
    for($i=0; $i<$qntdeAulas; $i++){
        echo "<h6>Aula: ".($i+1)."</h6>
       
           
            <label for='exampleInputEmail1'>Nome</label>
            <input type='text' required name='nome[$i]'><br>";
    }
        echo "    <input class='btn btn-primary' type='submit'>
                     <a class='btn btn-primary' href='cadCurso.php'>Voltar</a>
                </form>";
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}



?>
