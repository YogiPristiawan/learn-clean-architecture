<?php

namespace App;

use App\Services\Auth\AuthService;
use App\Services\Auth\Ayam\AyamAuthService;
use App\Services\Auth\Bebek\BebekAuthService;

class AuthController
{
	private $authService;

	public function __construct(AuthService $authService)
	{
		$this->authService = $authService;
	}

	public function register($request)
	{
		if ($request->id = 'ayam') {

			return $this->authService->register(new AyamAuthService, $request);
		} else if ($request->id = 'bebek') {

			return $this->authService->register(new BebekAuthService, $request);
		}
	}

	public function login($request)
	{
		/**
		 * do some stuff
		 */
	}
}
