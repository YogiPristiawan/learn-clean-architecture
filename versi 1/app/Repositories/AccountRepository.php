<?php

namespace App\Repositories;

use App\Models\Account as AccountModel;

interface AccountRepository
{
	public function __construct(string $name, string $type);

	public function insert();
}

class Account implements AccountRepository
{
	private $name;
	private $type;

	public function __construct(
		$name,
		$type
	) {
		$this->name = $name;
		$this->type = $type;
	}

	public function insert()
	{
		/**
		 * melakukan insert ke database dengan ORM / query builder laravel
		 */

		$account = new AccountModel;
		$account->name = $this->name;
		$account->type = $this->type;
		$account->save();
	}
}
