<?php

//namespace App\Controllers;
namespace App\Controllers\Superadmin;
use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index()
    {
        return view('\App\Views\Superadmin\dashboard.php');
    }
}
