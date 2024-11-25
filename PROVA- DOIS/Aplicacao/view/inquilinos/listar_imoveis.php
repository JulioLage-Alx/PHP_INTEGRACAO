<?php
require_once '../../modelo/mdinquilino.php';
$inquilinos = listarInquilinos();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Inquilinos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Lista de Inquilinos</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>Telefone</th>
                    <th>Data de Nascimento</th>
                    <th>Imóvel</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($inquilinos as $inquilino): ?>
                    <tr>
                        <td><?= $inquilino['id'] ?></td>
                        <td><?= $inquilino['nome'] ?></td>
                        <td><?= $inquilino['cpf'] ?></td>
                        <td><?= $inquilino['telefone'] ?></td>
                        <td><?= $inquilino['data_nascimento'] ?></td>
                        <td><?= $inquilino['imovel_endereco'] ?></td>
                        <td>
                            <a href="editar.php?id=<?= $inquilino['id'] ?>" class="btn btn-warning btn-sm">Editar</a>
                            <a href="../../controle/inquilino.php?id=<?= $inquilino['id'] ?>&acao=excluir" class="btn btn-danger btn-sm">Excluir</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
