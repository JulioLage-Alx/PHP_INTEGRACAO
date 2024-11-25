<?php

// Função para listar imóveis
function listarImoveis($conn) {
    $sql = "SELECT * FROM imovel";
    
    // Preparar e executar a consulta
    if ($stmt = mysqli_prepare($conn, $sql)) {
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        
        $imoveis = [];
        // Recuperar os dados dos imóveis
        while ($row = mysqli_fetch_assoc($result)) {
            $imoveis[] = $row;
        }
        
        // Fechar a declaração
        mysqli_stmt_close($stmt);
        
        return $imoveis;
    } else {
        die("Erro ao preparar a consulta: " . mysqli_error($conn));
    }
}
?>
