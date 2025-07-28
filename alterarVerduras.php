<?php
include "util.php";
$conn = conectar();

$id = $_GET['id'];
$varSQL = "SELECT * FROM produtos WHERE id = :id";
$select = $conn->prepare($varSQL);
$select->bindParam(':id', $id);
$select->execute();
$linha = $select->fetch();

$nome      = $linha['nome'];
$preco      = $linha['preco'];
$data_colheita   = $linha['data_colheita'];
$foto     = $linha['foto'];
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Alterar Prdoturo</title>
</head>
<body>
    <h1>Alterar Produto</h1>

    <form action="updateVerduras.php" method="post">
        <input type="hidden" name="id" value="<?php echo $id; ?>">

        nome:<br>
        <input type="text" name="preco" value="<?php echo $nome; ?>"><br><br>

        preco:<br>
        <input type="text" name="preco" value="<?php echo $preco; ?>"><br><br>

        data_colheita:<br>
        <input type="text" name="data_colheita" value="<?php echo $data_colheita; ?>"><br><br>

        foto:<br>
        <input type="email" name="email" value="<?php echo $foto; ?>"><br><br>
        <input type="submit" value="Salvar">
    </form>
</body>
</html>