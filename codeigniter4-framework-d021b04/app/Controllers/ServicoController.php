<?php

namespace App\Controllers;
use App\Models\Servico;
use CodeIgniter\RESTful\ResourceController;

class ServicoController extends ResourceController
{
    protected $modelName = 'App\Models\Servico';
    protected $format    = 'json';

    // Listar todos os serviços
    public function index()
    {
        return $this->respond($this->model->findAll());
    }

    // Adicionar um novo serviço
    public function create()
    {
        $data = $this->request->getPost();
        $this->model->insert($data);
        return $this->respondCreated($data);
    }

    // Atualizar um serviço existente
    public function update($id = null)
    {
        $data = $this->request->getRawInput();
        $this->model->update($id, $data);
        return $this->respond($data);
    }

    // Deletar serviço
    public function delete($id = null)
    {
        $this->model->delete($id);
        return $this->respondDeleted(["message" => "Serviço removido com sucesso!"]);
    }
}