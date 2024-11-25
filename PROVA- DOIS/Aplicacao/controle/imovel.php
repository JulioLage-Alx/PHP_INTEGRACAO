<?php
// Incluir o arquivo de conexão com o banco de dados
require_once '../../modelo/mdimovel.php';

// Mensagens de feedback
$msg = null;

// Verificar se a ação foi enviada via POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_POST['acao'] == 'criar') {
        // Recuperar os dados do formulário
        $endereco = $_POST['endereco'];
        $cep = $_POST['cep'];
        $valor_aluguel = $_POST['valor_aluguel'];
        $nome_proprietario = $_POST['nome_proprietario'];

        // Validação dos dados (Exemplo simples)
        if (empty($endereco) || empty($cep) || empty($valor_aluguel) || empty($nome_proprietario)) {
            $msg = ['type' => 'danger', 'message' => 'Todos os campos são obrigatórios!'];
        } else {
            // Inserir o imóvel no banco de dados
            $conn = mysqli_connect('localhost', 'root', 'Julio1975$', 'Up_Estade');
            if (!$conn) {
                die("Conexão falhou: " . mysqli_connect_error());
            }

            $sql = "INSERT INTO imovel (endereco, cep, valor_aluguel, nome_proprietario) 
                    VALUES (?, ?, ?, ?)";
            
            if ($stmt = mysqli_prepare($conn, $sql)) {
                mysqli_stmt_bind_param($stmt, "ssss", $endereco, $cep, $valor_aluguel, $nome_proprietario);
                
                if (mysqli_stmt_execute($stmt)) {
                    $msg = ['type' => 'success', 'message' => 'Imóvel adicionado com sucesso!'];
                } else {
                    $msg = ['type' => 'danger', 'message' => 'Erro ao adicionar imóvel. Tente novamente.'];
                }
                
                mysqli_stmt_close($stmt);
            }
            
            mysqli_close($conn);
        }
    }
}
?>
