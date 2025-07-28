<?php
require_once "util.php";
$db = conectar();
//alunos
$query = "SELECT id, nome, preco, data_colheita, foto FROM produtos";
$resultado = $db->query($query);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Feira livre</title>  
</head>
<body>
    <h1>FEIRA LIVRE DELIVERY</h1>
    <table border="1" cellpadding="6" cellspacing="0">
        <thead>
            <tr>
                <th>id</th>
                <th>Nome</th>
                <th>preco</th>
                <th>data_colheita</th>
                <th>foto</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($fruta = $resultado->fetch(PDO::FETCH_ASSOC)) : ?>
                <tr>
                    <td><?= $fruta['id'] ?></td>
                    <td><?= htmlspecialchars($fruta['nome']) ?></td>
                    <td><?= $fruta['preco'] ?></td>
                    <td><?= $fruta['data_colheita'] ?></td>
                    <td><?= $fruta['foto'] ?></td>
                    <td>
                        <a href="alterarVerduras.php?id=<?= $fruta['id'] ?>">Editar</a> |
                        <a href="excluirVerduras.php?id=<?= $fruta['id'] ?>" onclick="return confirm('Tem certeza que deseja excluir este aluno?');">Remover</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>

    <p><a href="adicionarVerduras.php">Cadastrar Nova Fruta</a></p>
</body>
</html>
