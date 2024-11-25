<?php
// Incluir a função para listar imóveis
require_once '../../modelo/mdimovel.php';

$conn = mysqli_connect('localhost', 'root', 'Julio1975$', 'Up_Estade'); 

// Verificar se a conexão foi bem-sucedida
if (!$conn) {
    die("Conexão falhou: " . mysqli_connect_error());
}

// Chamar a função para listar os imóveis
$imoveis = listarImoveis();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Imóveis</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Lista de Imóveis</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Endereço</th>
                    <th>CEP</th>
                    <th>Valor do Aluguel</th>
                    <th>Proprietário</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($imoveis as $imovel): ?>
                    <tr>
                        <td><?= $imovel['id'] ?></td>
                        <td><?= $imovel['endereco'] ?></td>
                        <td><?= $imovel['cep'] ?></td>
                        <td><?= $imovel['valor_aluguel'] ?></td>
                        <td><?= $imovel['nome_proprietario'] ?></td>
                        <td>
                            <a href="editar.php?id=<?= $imovel['id'] ?>" class="btn btn-warning btn-sm">Editar</a>
                            <a href="../../controle/imovel.php?id=<?= $imovel['id'] ?>&acao=excluir" class="btn btn-danger btn-sm">Excluir</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
