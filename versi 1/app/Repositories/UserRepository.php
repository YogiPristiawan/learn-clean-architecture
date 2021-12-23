<?php

namespace App\Repositories;

use App\Models\User as UserModel;

interface UserRepository
{
	public function __construct(string $fullName, string $addressId);

	public function insert();
}

class User implements UserRepository
{
	private $fullName;
	private $addressId;

	public function __construct(
		$fullName,
		$addressId
	) {
		$this->fullName = $fullName;
		$this->addressId = $addressId;
	}

	public function insert()
	{
		/**
		 * insert data menggunakan laravel ORM / query builder laravel
		 */

		$user = new UserModel;
		$user->fullName = $this->fullName;
		$user->addressId = $this->addressId;
		$user->save();
	}
}
