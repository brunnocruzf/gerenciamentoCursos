<?php
session_start();
if ($_SESSION['nivel'==1]){
    include ('menu.php');
}

$username = 'root';
$password = '';

$nome = $_GET['nome'];
$cpf = $_GET['cpf'];
$telefone = $_GET['telefone'];
$senha = $_GET['senha'];
$nivel = $_GET['nivel'];

try {
    $conn = new PDO('mysql:host=localhost;dbname=as', $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

   $stm = $conn->prepare('insert into usuarios (nome,cpf,telefone,senha,nivel)
                        values(:nome, :cpf, :telefone, :senha, :nivel);');

    $stm->bindParam(':nome',$nome);
    $stm->bindParam(':cpf',$cpf);
    $stm->bindParam(':telefone',$telefone);
    $stm->bindParam(':senha',$senha);
    $stm->bindParam(':nivel',$nivel);

    $stm->execute();

    echo $nome.' inserido com suceso.';
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}

echo '<br><a href="login.php">Login</a>';

$data = $conn->query('select * from usuarios;')->fetchAll();

?>