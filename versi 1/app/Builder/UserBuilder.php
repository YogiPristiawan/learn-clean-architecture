<?php

namespace App\Builder;

use App\Repositories\UserRepository;

class UserBuilder
{
	private $fullName;
	private $addressId;

	public function setFullName(string $fullName)
	{
		$this->fullName = $fullName;
		return $this;
	}

	public function setAddressId(string $addressId)
	{
		$this->addressId = $addressId;
		return $this;
	}

	public function build(): UserRepository
	{
		return new UserRepository(
			$this->fullName,
			$this->addressId
		);
	}
}
