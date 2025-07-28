<!DOCTYPE html>
<html>
<head>
    <title>Adicionar Fruta</title>
</head>
<body>
    <h2>Formulário para Adicionar Fruta</h2>
    <form action="insertAlunos.php" method="post">
        nome: <input type="text" name="nome" required><br><br>
        id: <input type="text" name="id" required><br><br>
        preco: <input type="decimal" name="preco" required><br><br>
        data_coleheita: <input type="date" name="data_colheita" required><br><br>
        foto: <input type="text" name="foto" required><br><br>

        <input type="submit" value="Cadastrar Fruta">
    </form>
</body>
</html>