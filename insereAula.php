<?php
include ('menu.php');
$username = 'root';
$password = '';

$idcurso = $_POST['idcurso'];
$aula = $_POST['nome'];
$idcurso = intval($idcurso);
$url = $_POST['url'];
$desc = $_POST['desc'];

$contador = $_POST['contador'];

$resultado = array();

foreach ($contador as $id => $key){
    $resultado[$key] = array(
        'nome'=>$aula[$id],
        'url'=>$url[$id],
        'desc'=>$desc[$id]
    );
}
var_dump($contador);
var_dump($resultado);

try {
    $i = 0;
    foreach ($resultado as $cada){
        $conn = new PDO('mysql:host=localhost;dbname=as', $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stm = $conn->prepare('insert into aulas (idCurso, aula, url, descricao)
                        values(:idcurso,:aula, :url, :desc);');

        $stm->bindValue(':idcurso',$idcurso);
        $stm->bindValue(':aula', $cada['nome']);
        $stm->bindValue(':url', $cada['url']);
        $stm->bindValue(':desc', $cada['desc']);

        $stm->execute();
    }


    echo "Aulas incluidas com sucesos.";
} catch (PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}

echo '<br><a class="btn btn-primary" href="cadCurso.php">Voltar</a>';