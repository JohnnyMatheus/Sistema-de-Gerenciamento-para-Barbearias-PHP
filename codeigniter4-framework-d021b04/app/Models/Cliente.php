<?php

namespace App\Models;
use CodeIgniter\Model;

class Cliente extends Model
{
    protected $table      = 'cliente';
    protected $primaryKey = 'codcli';
    protected $allowedFields = [
        'nomcli', 'telcli', 'emailcli', 'bairrocli', 'ruaendcli',
        'sexocli', 'cidadecli', 'dtnascli'
    ];

    protected $useTimestamps = false;

    // Métodos personalizados para obter e definir valores, simulando Getters e Setters
    public function getClienteById($id)
    {
        return $this->find($id);
    }

    public function updateCliente($id, $data)
    {
        return $this->update($id, $data);
    }

    public function createCliente($data)
    {
        return $this->insert($data);
    }

    public function deleteCliente($id)
    {
        return $this->delete($id);
    }
}