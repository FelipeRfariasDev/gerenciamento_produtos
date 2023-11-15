<?php
$pdo = new PDO('mysql:host=localhost;dbname=aula_php_vitor', 'root', '');

$email = $_POST['email'];
$senha = md5($_POST['senha']);

$sql = "SELECT * FROM usuarios where email='$email' and senha='$senha'";
$result = $pdo->query($sql);
$login=$result->fetch(PDO::FETCH_ASSOC);
session_start();
if ($login) {
    $_SESSION['usuario_logado']=true;
    $_SESSION['nome']=$login['nome'];
    $_SESSION['email']=$login['email'];
    header("location: inicio.php");

    echo "Login bem-sucedido. Bem-vindo, " . $login['email'] . "!";
} else {
    echo "Nome de usuário ou senha incorretos.";
}