<?php

namespace App\Services\Auth\Ayam;

use App\Factory\AuthFactory;
use App\Services\Auth\AuthService;
use App\Repositories\AccountRepository;
use App\Repositories\UserRepository;

class AyamAuthService extends AuthService implements AuthFactory
{
	public function doRegister($request)
	{
		/**
		 * melakukan beberapa business logic
		 */

		/**
		 * insert ke table Account
		 */
		$account = new AccountRepository;
		$account->insert([
			'name' => $request->name,
			'type' => $request->type
		]);

		/**
		 * insert ke table User
		 */
		$user = new UserRepository;
		$user->insert([
			'full_name' => $request->name,
			'address_id' => $request->address_id
		]);
	}
}
