<?php

//namespace App\Controllers;
namespace App\Controllers\Superadmin;
use App\Controllers\BaseController;

class Pengguna extends BaseController
{
    public function index()
    {
        $data['title'] = 'RAHA-U | Dashboard';
        helper('form');
        return view('\App\Views\Dokter\myprofile.php', $data);
    }
}
