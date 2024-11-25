<?php include '../../controle/imovel.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Imóvel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Adicionar Imóvel</h2>
        
        <!-- Exibir mensagens de erro ou sucesso -->
        <?php if (isset($msg)): ?>
            <div class="alert alert-<?= $msg['type']; ?>" role="alert">
                <?= $msg['message']; ?>
            </div>
        <?php endif; ?>

        <!-- Formulário de Adição de Imóvel -->
        <form action="../../controle/imovel.php" method="POST">
            <input type="hidden" name="acao" value="criar">
            
            <div class="mb-3">
                <label for="endereco">Endereço:</label>
                <input type="text" class="form-control" name="endereco" id="endereco" required>
            </div>
            <div class="mb-3">
                <label for="cep">CEP:</label>
                <input type="text" class="form-control" name="cep" id="cep" required>
            </div>
            <div class="mb-3">
                <label for="valor_aluguel">Valor do Aluguel:</label>
                <input type="number" step="0.01" class="form-control" name="valor_aluguel" id="valor_aluguel" required>
            </div>
            <div class="mb-3">
                <label for="nome_proprietario">Nome do Proprietário:</label>
                <input type="text" class="form-control" name="nome_proprietario" id="nome_proprietario" required>
            </div>
            
            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
    </div>
</body>
</html>
