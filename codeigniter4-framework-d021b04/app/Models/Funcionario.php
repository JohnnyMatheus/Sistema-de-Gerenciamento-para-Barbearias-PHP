<?php

namespace App\Models;
use CodeIgniter\Model;

class Funcionario extends Model
{
    protected $table      = 'funcionario';
    protected $primaryKey = 'codfun';
    protected $allowedFields = ['nomefun', 'telefone', 'email', 'cargo'];

    protected $useTimestamps = false;
}