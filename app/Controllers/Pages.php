<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | WPZ',
            'test' => ['satu', 'dua', 'tiga']
        ];
        echo view('pages/home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About Me'
        ];
        echo view('pages/about', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact US',
            'alamat' => [
                [
                    'tipe' => 'Rumah',
                    'alamat' => 'Jln RTM No.123',
                    'kota' => 'Bandung',
                ],

                [
                    'tipe' => 'Kantor',
                    'alamat' => 'Jln. Rengasdoengklok No.2',
                    'kota' => 'Purwakarta',
                ]
            ]
        ];

        return view('pages/contact', $data);
    }
    //--------------------------------------------------------------------

}
