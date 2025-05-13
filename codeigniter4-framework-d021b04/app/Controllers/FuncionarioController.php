<?php

namespace App\Controllers;
use App\Models\Funcionario;
use CodeIgniter\RESTful\ResourceController;

class FuncionarioController extends ResourceController
{
    protected $modelName = 'App\Models\Funcionario';
    protected $format    = 'json';

    // Listar todos os funcionários
    public function index()
    {
        return $this->respond($this->model->findAll());
    }

    // Adicionar um novo funcionário
    public function create()
    {
        $data = $this->request->getPost();
        $this->model->insert($data);
        return $this->respondCreated($data);
    }

    // Atualizar funcionário existente
    public function update($id = null)
    {
        $data = $this->request->getRawInput();
        $this->model->update($id, $data);
        return $this->respond($data);
    }

    // Deletar funcionário
    public function delete($id = null)
    {
        $this->model->delete($id);
        return $this->respondDeleted(["message" => "Funcionário removido com sucesso!"]);
    }
}