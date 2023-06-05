<?php 
include('../database/db.php');
include('../lib/forms.php');
//valores rebecidos do form de cadastro
$user = input_post('user');
$pwd = input_post('pwd');
$email = input_post('email');

$query = "INSERT INTO usuario (NICK, EMAIL, SENHA) VALUES ('$user','$email','$pwd')";

//execução de comando na conexão

mysqli_query($conexao, $query);

//redirecionar
header('location:../home.php');
die();
?>