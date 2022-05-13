<?php
include_once('index.php');
$nome=$_POST['nome'];
$cpf=$_POST['cpf'];


$sql= "INSERT INTO teste
(nome, cpf) VALUES
('$nome', '$cpf')";
$query= mysqli_query($conexão, $sql)

?>

