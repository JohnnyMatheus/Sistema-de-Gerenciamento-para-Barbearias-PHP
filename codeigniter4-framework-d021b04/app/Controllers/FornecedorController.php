<?php

namespace App\Controllers;
use App\Models\Fornecedor;
use CodeIgniter\RESTful\ResourceController;

class FornecedorController extends ResourceController
{
    protected $modelName = 'App\Models\Fornecedor';
    protected $format    = 'json';

    // Listar todos os fornecedores
    public function index()
    {
        return $this->respond($this->model->findAll());
    }

    // Adicionar um novo fornecedor
    public function create()
    {
        $data = $this->request->getPost();
        $this->model->insert($data);
        return $this->respondCreated($data);
    }

    // Atualizar fornecedor existente
    public function update($id = null)
    {
        $data = $this->request->getRawInput();
        $this->model->update($id, $data);
        return $this->respond($data);
    }

    // Deletar fornecedor
    public function delete($id = null)
    {
        $this->model->delete($id);
        return $this->respondDeleted(["message" => "Fornecedor removido com sucesso!"]);
    }
}