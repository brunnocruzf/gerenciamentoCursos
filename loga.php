<?php
session_start();

$login = $_POST['login'];
$senha = $_POST['senha'];


$username = 'root';
$password = '';
try {
    $conn = new PDO('mysql:host=localhost;dbname=as', $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stm = $conn->prepare('select * from usuarios where nome = :nome and senha = :senha');

    $stm->bindParam(':nome',$login);
    $stm->bindParam(':senha',$senha);

    $stm->execute();
   $logado = $stm->rowCount();
    $dados = $stm->fetch();
    $id = $dados['idusuarios'];
    $nivel = $dados['nivel'];

   if($logado==1){
       $_SESSION['login'] = $login;
       $_SESSION['senha'] = $senha;
       $_SESSION['idusuario'] = $id;
       $_SESSION['nivel'] = $nivel;

       header('location:menu.php');
   }else{
       echo "Erro de login";
   }

} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}