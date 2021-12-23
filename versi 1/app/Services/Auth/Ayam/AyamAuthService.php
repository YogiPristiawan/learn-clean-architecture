<?php

namespace App\Services\Auth\Ayam;

use App\Factory\AuthFactory;
use App\Services\Auth\AuthService;
use App\Services\Account\AccountService;
use App\Services\User\UserService;
use App\Builder\AccountBuilder;
use App\Builder\UserBuilder;

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
		$accountService = new AccountService;
		$accountService->insert(
			(new AccountBuilder)
				->setName($request->name)
				->setType($request->type)
				->build()
		);

		/**
		 * insert ke table User
		 */
		$user = new UserService;
		$user->insert(
			(new UserBuilder)
				->setFullName($request->name)
				->setAddressId('123')
				->build()
		);
	}
}
