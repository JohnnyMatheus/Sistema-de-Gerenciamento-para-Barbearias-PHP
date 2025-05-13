<?php

namespace App\Controllers;
use App\Models\HistoricoServico;
use CodeIgniter\RESTful\ResourceController;

class HistoricoServicoController extends ResourceController
{
    protected $modelName = 'App\Models\HistoricoServico';
    protected $format    = 'json';

    // Listar todos os históricos de serviço
    public function index()
    {
        return $this->respond($this->model->findAll());
    }

    // Obter histórico por ID
    public function show($id = null)
    {
        $data = $this->model->find($id);
        return ($data) ? $this->respond($data) : $this->failNotFound("Histórico não encontrado.");
    }

    // Criar um novo histórico de serviço
    public function create()
    {
        $data = $this->request->getPost();
        
        // Validação básica
        if (empty($data['dataHora']) || empty($data['servico']) || empty($data['cliente']) || empty($data['funcionario'])) {
            return $this->failValidationErrors("Dados obrigatórios estão faltando.");
        }

        $this->model->insert($data);
        return $this->respondCreated($data);
    }

    // Atualizar um histórico existente
    public function update($id = null)
    {
        $data = $this->request->getRawInput();
        if (!$this->model->find($id)) {
            return $this->failNotFound("Histórico não encontrado.");
        }

        $this->model->update($id, $data);
        return $this->respond($data);
    }

    // Deletar histórico
    public function delete($id = null)
    {
        if (!$this->model->find($id)) {
            return $this->failNotFound("Histórico não encontrado.");
        }

        $this->model->delete($id);
        return $this->respondDeleted(["message" => "Histórico removido com sucesso!"]);
    }
}