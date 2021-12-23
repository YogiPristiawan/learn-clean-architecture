<?php

namespace App\Services\Auth\Bebek;

use App\Factory\AuthFactory;
use App\Services\Auth\AuthService;

class BebekAuthService extends AuthService implements AuthFactory
{
	public function doRegister($request)
	{
		/**
		 * logic sedikit berbeda dengan aplikasi Ayam
		 */
	}
}
