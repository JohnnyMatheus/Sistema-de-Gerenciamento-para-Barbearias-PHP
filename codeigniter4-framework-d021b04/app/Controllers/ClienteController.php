<?php

namespace App\Controllers;
use App\Models\Cliente;
use CodeIgniter\RESTful\ResourceController;

class ClienteController extends ResourceController
{
    protected $modelName = 'App\Models\Cliente';
    protected $format    = 'json';

    // Listar todos os clientes
    public function index()
    {
        return $this->respond($this->model->findAll());
    }

    // Obter cliente por ID
    public function show($id = null)
    {
        $data = $this->model->find($id);
        return ($data) ? $this->respond($data) : $this->failNotFound("Cliente não encontrado.");
    }

    // Criar novo cliente
    public function create()
    {
        $data = $this->request->getPost();
        $this->model->insert($data);
        return $this->respondCreated($data);
    }

    // Atualizar um cliente existente
    public function update($id = null)
    {
        $data = $this->request->getRawInput();
        $this->model->update($id, $data);
        return $this->respond($data);
    }

    // Deletar cliente
    public function delete($id = null)
    {
        $this->model->delete($id);
        return $this->respondDeleted(["message" => "Cliente removido com sucesso!"]);
    }
}