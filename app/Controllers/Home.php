<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		echo 'ini adalah controller index method index';
	}

	public function about($nama = '', $umur = 0)
	{
		echo "hai nama saya $nama. saya berumur $umur tahun.";
	}
	//--------------------------------------------------------------------

}
