<?php

namespace App\Controllers;

class Coba extends BaseController
{
	public function index()
	{
		// return view('welcome_message');
		echo 'hello world !';
	}

	public function about($nama = '', $umur = 0)
	{
		echo "hai nama saya $nama umur saya $umur tahun";
	}

	//--------------------------------------------------------------------

}
