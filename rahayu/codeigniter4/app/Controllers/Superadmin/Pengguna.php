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

    public function addsa()
    {
        $data['title'] = 'SA | Tambah Superadmin';
        helper('form');
        return view('\App\Views\Superadmin\addsa.php', $data);
    }
}
