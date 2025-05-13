<?php

namespace App\Controllers;
use App\Models\Agendamento;
use CodeIgniter\RESTful\ResourceController;

class AgendamentoController extends ResourceController
{
    protected $modelName = 'App\Models\Agendamento';
    protected $format    = 'json';

    // Listar todos os agendamentos
    public function index()
    {
        return $this->respond($this->model->findAll());
    }

    // Obter um agendamento por ID
    public function show($id = null)
    {
        $data = $this->model->find($id);
        return ($data) ? $this->respond($data) : $this->failNotFound("Agendamento não encontrado.");
    }

    // Criar um novo agendamento
    public function create()
    {
        $data = $this->request->getPost();
        $this->model->insert($data);
        return $this->respondCreated($data);
    }

    // Atualizar um agendamento existente
    public function update($id = null)
    {
        $data = $this->request->getRawInput();
        $this->model->update($id, $data);
        return $this->respond($data);
    }

    // Deletar um agendamento
    public function delete($id = null)
    {
        $this->model->delete($id);
        return $this->respondDeleted(["message" => "Agendamento removido com sucesso!"]);
    }
}