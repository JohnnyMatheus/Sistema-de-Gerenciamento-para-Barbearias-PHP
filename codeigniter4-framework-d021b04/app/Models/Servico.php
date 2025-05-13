<?php

namespace App\Models;
use CodeIgniter\Model;

class Servico extends Model
{
    protected $table      = 'servico';
    protected $primaryKey = 'codserv';
    protected $allowedFields = ['nomeserv', 'descserv', 'precoserv'];

    protected $useTimestamps = false;
}