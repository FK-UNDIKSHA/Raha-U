<?php

//namespace App\Controllers;
namespace App\Controllers\Dokter;
use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index()
    {
        $data['title'] = 'SA | Dashboard';

        return view('\App\Views\Superadmin\dashboard.php', $data);
    }
}
