<?php
require_once '../modelo/mdimovel.php';

class ImovelController {
    private $model;

    public function __construct() {
        $this->model = new Mdimovel();
    }

    public function criarImovel($dados) {
        return $this->model->inserirImovel($dados);
    }

    public function listarImoveis() {
        return $this->model->listarImoveis();
    }

    public function atualizarImovel($id, $dados) {
        return $this->model->atualizarImovel($id, $dados);
    }

    public function excluirImovel($id) {
        return $this->model->excluirImovel($id);
    }
}
