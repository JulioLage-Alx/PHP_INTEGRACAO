<?php
class Mdimovel {
    private $conexao;

    public function __construct() {
        $this->conexao = new mysqli('localhost', 'root', '', 'imobiliaria');
    }

    public function inserirImovel($dados) {
        $query = "INSERT INTO imovel (endereco, cep, valor_aluguel, nome_proprietario) 
                  VALUES (?, ?, ?, ?)";
        $stmt = $this->conexao->prepare($query);
        $stmt->bind_param('ssds', $dados['endereco'], $dados['cep'], $dados['valor_aluguel'], $dados['nome_proprietario']);
        return $stmt->execute();
    }

    public function listarImoveis() {
        $query = "SELECT * FROM imovel";
        return $this->conexao->query($query)->fetch_all(MYSQLI_ASSOC);
    }

    public function atualizarImovel($id, $dados) {
        $query = "UPDATE imovel SET endereco = ?, cep = ?, valor_aluguel = ?, nome_proprietario = ? WHERE id = ?";
        $stmt = $this->conexao->prepare($query);
        $stmt->bind_param('ssdsi', $dados['endereco'], $dados['cep'], $dados['valor_aluguel'], $dados['nome_proprietario'], $id);
        return $stmt->execute();
    }

    public function excluirImovel($id) {
        $query = "DELETE FROM imovel WHERE id = ?";
        $stmt = $this->conexao->prepare($query);
        $stmt->bind_param('i', $id);
        return $stmt->execute();
    }
}
