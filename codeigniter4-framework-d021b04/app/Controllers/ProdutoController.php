<?php

namespace App\Controllers;
use App\Models\Produto;
use CodeIgniter\RESTful\ResourceController;

class ProdutoController extends ResourceController
{
    protected $modelName = 'App\Models\Produto';
    protected $format    = 'json';

    // Listar todos os produtos
    public function index()
    {
        return $this->respond($this->model->findAll());
    }

    // Adicionar um novo produto
    public function create()
    {
        $data = $this->request->getPost();
        $this->model->insert($data);
        return $this->respondCreated($data);
    }

    // Atualizar um produto existente
    public function update($id = null)
    {
        $data = $this->request->getRawInput();
        $this->model->update($id, $data);
        return $this->respond($data);
    }

    // Deletar produto
    public function delete($id = null)
    {
        $this->model->delete($id);
        return $this->respondDeleted(["message" => "Produto removido com sucesso!"]);
    }
}