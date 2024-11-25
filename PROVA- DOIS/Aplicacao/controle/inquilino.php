<?php
require_once '../config/conexao.php';

class MdImovel {
    private $conexao;

    public function __construct() {
        $this->conexao = Conexao::getConexao();
    }

    public function obterTodos() {
        $sql = "SELECT * FROM imovel";
        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function inserir($dados) {
        $sql = "INSERT INTO imovel (endereco, cep, valor_aluguel, nome_proprietario) VALUES (:endereco, :cep, :valor_aluguel, :nome_proprietario)";
        $stmt = $this->conexao->prepare($sql);
        return $stmt->execute($dados);
    }
}
?>
