<?php

namespace App\Controllers;

use App\Models\KomikModel;

class Komik extends BaseController
{
    protected $komikModel;
    public function __construct()
    {
        $this->komikModel = new KomikModel();
    }
    public function index()
    {
        $Komik = $this->komikModel->findAll();
        $data = [
            'title' => 'Daftar Komik',
            'komik' => $Komik
        ];


        /**
         * cara konek database tanpa table
         * $db = \Config\Database::connect();
         * $komik = $db->query("SELECT * FROM komik");
         * foreach ($komik->getResultArray() as $row) {
         * d($row);
         * }
         */

        // $KomikModel = \App\Models\KomikModels();
        // $KomikModel = new KomikModel();
        return view('komik/index', $data);
    }
}
