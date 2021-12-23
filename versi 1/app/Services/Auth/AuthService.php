<?php

namespace App\Services\Auth;

use App\Factory\AuthFactory;

abstract class AuthService
{
	public function register(AuthFactory $authFactory, $request)
	{
		return $authFactory->doRegister($request);
	}

	public function checkEmail($request)
	{
		/**
		 * do some stuff
		 */
	}

	public function checkPhone($request)
	{
		/**
		 * do some stuff		 
		 */
	}
}
