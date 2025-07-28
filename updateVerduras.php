<?php
include "util.php";
$conn = conectar();

// Recebe os dados do formulário
$id        = $_POST['id'];
$nome      = $_POST['nome'];
$preco   = $_POST['preco'];
$data_colheita     = $_POST['data_colheita'];
$foto     = $_POST['foto'];
// SQL para atualizar os dados
$sql = "UPDATE produtos SET 
            nome = :nome, 
            preco = :preco, 
            data_colheita = :data_colheita, 
            foto = :foto, 
        WHERE id = :id";

$stmt = $conn->prepare($sql);

// Passa os valores para os parâmetros
$stmt->bindParam(':id', $id);
$stmt->bindParam(':nome', $nome);
$stmt->bindParam(':preco', $preco);
$stmt->bindParam(':data_colheita', $data_colheita);
$stmt->bindParam(':foto', $foto);

// Executa e verifica se deu certo
if ($stmt->execute()) {
    echo "Fruta atualizada com sucesso!<br>";
    echo "<a href='fruta.php'>Voltar para lista</a>";
} else {
    echo "Erro ao atualizar aluno.<br>";
    print_r($stmt->errorInfo());
}
?>
