<?php

namespace App\Controllers;

class Covid extends BaseController
{
	public function landing()
	{
		return view('covid/landing');
	}
}
