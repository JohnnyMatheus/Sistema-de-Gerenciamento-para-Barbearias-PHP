<?php

namespace App\Models;
use CodeIgniter\Model;

class HistoricoServico extends Model
{
    protected $table      = 'historico_servico';
    protected $primaryKey = 'codhistorico';
    protected $allowedFields = ['data_hora', 'servicocodserv', 'clientecodcli', 'funcionariocodfun'];

    protected $useTimestamps = false;
}