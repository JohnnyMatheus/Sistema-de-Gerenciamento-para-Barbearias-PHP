<?php

namespace App\Models;
use CodeIgniter\Model;

class Produto extends Model
{
    protected $table      = 'produto';
    protected $primaryKey = 'codprod';
    protected $allowedFields = ['nomeprod', 'descprod', 'qtdprod', 'precoprod', 'fornecedorcodforn', 'servicocodserv'];

    protected $useTimestamps = false;
}