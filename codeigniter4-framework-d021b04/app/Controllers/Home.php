<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('index');
    }
}


class Clientes extends BaseController
{
    public function index()
    {
        return view('clientes'); // Carrega a view clientes.php
    }
}