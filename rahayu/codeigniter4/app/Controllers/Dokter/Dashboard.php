<?php

//namespace App\Controllers;
namespace App\Controllers\Dokter;
use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index()
    {
        $data['title'] = 'RAHA-U | Dashboard';
        return view('\App\Views\dokter\dashboard.php', $data);
    }
}
