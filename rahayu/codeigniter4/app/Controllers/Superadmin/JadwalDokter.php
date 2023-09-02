<?php

namespace App\Controllers;
namespace App\Controllers\Superadmin;
use App\Controllers\BaseController;

class JadwalDokter extends BaseController
{
    public function index()
    {
        return view('\App\Views\Superadmin\jadwaldokter.php',
                   ['title' => "SA | Jadwal Operasional",]);
    }
}
