<?php

namespace App\Controllers;
use App\Models\Pagamento;
use CodeIgniter\RESTful\ResourceController;

class PagamentoController extends ResourceController
{
    protected $modelName = 'App\Models\Pagamento';
    protected $format    = 'json';

    // Listar todos os pagamentos
    public function index()
    {
        return $this->respond($this->model->findAll());
    }

    // Adicionar um novo pagamento
    public function create()
    {
        $data = $this->request->getPost();
        $this->model->insert($data);
        return $this->respondCreated($data);
    }

    // Atualizar um pagamento existente
    public function update($id = null)
    {
        $data = $this->request->getRawInput();
        $this->model->update($id, $data);
        return $this->respond($data);
    }

    // Deletar pagamento
    public function delete($id = null)
    {
        $this->model->delete($id);
        return $this->respondDeleted(["message" => "Pagamento removido com sucesso!"]);
    }
}