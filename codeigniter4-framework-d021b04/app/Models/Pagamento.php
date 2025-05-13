<?php

namespace App\Models;
use CodeIgniter\Model;

class Pagamento extends Model
{
    protected $table      = 'pagamento';
    protected $primaryKey = 'codpag';
    protected $allowedFields = ['valor', 'data_hora_pagamento', 'forma_pagamento', 'clientecodcli', 'agendamentocodagen'];

    protected $useTimestamps = false;
}