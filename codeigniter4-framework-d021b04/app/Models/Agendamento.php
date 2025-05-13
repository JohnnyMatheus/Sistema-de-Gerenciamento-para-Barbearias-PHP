<?php

namespace App\Models;
use CodeIgniter\Model;

class Agendamento extends Model
{
    protected $table      = 'agendamento';
    protected $primaryKey = 'codagen';
    protected $allowedFields = ['data_hora', 'status', 'clientecodcli', 'funcionariocodfun'];

    protected $useTimestamps = false;
}