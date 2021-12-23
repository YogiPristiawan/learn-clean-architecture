<?php

namespace App\Services\User;

use App\Repositories\UserRepository;

class UserService
{
	public function insert(UserRepository $userRepository)
	{
		return $userRepository->insert();
	}
}
