<?php
include "util.php";
$conn = conectar();

$id = $_GET['id'];

$varSQL = "DELETE FROM produtos WHERE id = :id";
$delete = $conn->prepare($varSQL);
$delete->bindParam(':id', $id);
$delete->execute();

header("Location: fruta.php");exit;
?>