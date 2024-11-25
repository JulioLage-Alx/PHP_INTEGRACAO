<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestão Imobiliária</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Estilo do fundo */
        body {
            background-color: #f8f9fa;
        }

        /* Estilo do cabeçalho */
        h1 {
            font-family: 'Arial', sans-serif;
            color: #343a40;
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        p {
            color: #6c757d;
            font-size: 1.2rem;
            margin-bottom: 30px;
        }

        /* Estilo dos cards */
        .card {
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
        }

        .card-body {
            background-color: #ffffff;
            padding: 30px;
        }

        .card-title {
            font-size: 1.5rem;
            color: #007bff;
            font-weight: 600;
        }

        .card-text {
            font-size: 1rem;
            color: #6c757d;
        }

        /* Estilo dos botões */
        .btn-primary {
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            padding: 10px 25px;
            font-size: 1rem;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

    <div class="container mt-5">
        <h1>Bem-vindo à Gestão Imobiliária</h1>
        <p>Escolha uma das opções abaixo para gerenciar os registros imobiliários e inquilinos:</p>

        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><i class="bi bi-house-door"></i> Gerenciar Imóveis</h5>
                        <p class="card-text">Adicione, edite ou visualize imóveis cadastrados.</p>
                        <a href="Aplicacao/view/imoveis/listar_imoveis.php" class="btn btn-primary">Gerenciar Imóveis</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><i class="bi bi-person-bounding-box"></i> Gerenciar Inquilinos</h5>
                        <p class="card-text">Adicione, edite ou visualize inquilinos cadastrados.</p>
                        <a href="Aplicacao/view/inquilinos/listar_inquilinos.php" class="btn btn-primary">Gerenciar Inquilinos</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Ícones do Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.js"></script>
</body>
</html>
