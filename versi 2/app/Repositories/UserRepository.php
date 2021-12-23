<?php

namespace App\Repositories;

use App\Models\User;

class UserRepository
{
	public function insert($data)
	{
		/**
		 * insert data menggunakan laravel ORM / query builder laravel
		 */

		$user = new User;
		$user->fullName = $data['full_name'];
		$user->addressId = $data['address_id'];
		$user->save();
	}

	public function update($data)
	{
		/**
		 * do some stuff
		 */
	}
}
