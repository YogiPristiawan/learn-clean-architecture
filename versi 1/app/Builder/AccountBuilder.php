<?php

namespace App\Builder;

use App\Repositories\AccountRepository;

class AccountBuilder
{
	private $name;
	private $type;

	public function setName(string $name)
	{
		$this->name = $name;
		return $this;
	}

	public function setType(string $type)
	{
		$this->type = $type;
		return $this;
	}

	public function build(): AccountRepository
	{
		return new AccountRepository(
			$this->name,
			$this->type
		);
	}
}
