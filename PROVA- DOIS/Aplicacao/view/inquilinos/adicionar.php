<?php include '../../controle/inquilino.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Inquilino</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Adicionar Inquilino</h2>
        <form action="../../controle/inquilino.php" method="POST">
            <input type="hidden" name="acao" value="criar">
            <div class="mb-3">
                <label for="nome">Nome Completo:</label>
                <input type="text" class="form-control" name="nome" id="nome" required>
            </div>
            <div class="mb-3">
                <label for="cpf">CPF:</label>
                <input type="text" class="form-control" name="cpf" id="cpf" required>
            </div>
            <div class="mb-3">
                <label for="telefone">Telefone:</label>
                <input type="text" class="form-control" name="telefone" id="telefone" required>
            </div>
            <div class="mb-3">
                <label for="data_nascimento">Data de Nascimento:</label>
                <input type="date" class="form-control" name="data_nascimento" id="data_nascimento" required>
            </div>
            <div class="mb-3">
                <label for="imovel_id">Imóvel:</label>
                <select class="form-control" name="imovel_id" id="imovel_id" required>
                    <?php
                    require_once '../../modelo/mdimovel.php';
                    $imoveis = listarImoveis();
                    foreach ($imoveis as $imovel):
                    ?>
                        <option value="<?= $imovel['id'] ?>"><?= $imovel['endereco'] ?> (<?= $imovel['cep'] ?>)</option>
                    <?php endforeach; ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
    </div>
</body>
</html>
