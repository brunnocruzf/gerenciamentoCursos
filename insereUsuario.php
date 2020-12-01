<?php

$username = 'root';
$password = '';

$nome = $_GET['nome'];
$cpf = $_GET['cpf'];
$telefone = $_GET['telefone'];
$senha = $_GET['senha'];

try {
    $conn = new PDO('mysql:host=localhost;dbname=as', $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

   $stm = $conn->prepare('insert into usuarios (nome,cpf,telefone,senha)
                        values(:nome, :cpf, :telefone, :senha);');

    $stm->bindParam(':nome',$nome);
    $stm->bindParam(':cpf',$cpf);
    $stm->bindParam(':telefone',$telefone);
    $stm->bindParam(':senha',$senha);

    $stm->execute();

    echo $nome.' inserido com suceso.';
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}

echo '<br><a href="login.php">Login</a>';

$data = $conn->query('select * from usuarios;')->fetchAll();

?>