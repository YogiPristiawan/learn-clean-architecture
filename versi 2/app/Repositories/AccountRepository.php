<?php

namespace App\Repositories;

use App\Models\Account;

class AccountRepository
{

	public function insert($data)
	{
		/**
		 * melakukan insert ke database dengan ORM / query builder laravel
		 */

		$account = new AccountModel;
		$account->name = $data['name'];
		$account->type = $data['type'];
		$account->save();
	}

	public function update($data)
	{
		/**
		 * do some stuff
		 */
	}
}
