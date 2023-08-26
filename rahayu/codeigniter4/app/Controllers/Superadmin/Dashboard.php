<?php

//namespace App\Controllers;
namespace App\Controllers\Superadmin;
use CodeIgniter\Controller;

class Dashboard extends BaseController
{
    public function index()
    {
        return view('\App\Views\Superadmin\dashboard.php');
    }
}
