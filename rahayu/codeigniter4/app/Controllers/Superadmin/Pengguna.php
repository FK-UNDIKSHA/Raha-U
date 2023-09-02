<?php

//namespace App\Controllers;
namespace App\Controllers\Superadmin;
use App\Controllers\BaseController;

class Pengguna extends BaseController
{
    public function index()
    {
        return view('\App\Views\Superadmin\pengguna.php',
                   ['title' => "SA | Data Pengguna",]);
    }
}
