<?php
include 'util.php'; 

$conn = conectar();

$varSQL = "INSERT INTO produtos (id, nome, data_colheita, preco, foto) 
           VALUES (:id, :nome, :data_colheita, :preco, :foto)";

$insert = $conn->prepare($varSQL);

$insert->bindParam(':id', $_POST['id']);
$insert->bindParam(':nome', $_POST['nome']);
$insert->bindParam(':data_colheita', $_POST['data_colheita']);
$insert->bindParam(':preco', $_POST['preco']);
$insert->bindParam(':foto', $_POST['foto']);
$insert->execute();

header('location: fruta.php')
?>