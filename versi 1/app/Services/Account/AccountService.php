<?php

namespace App\Services\Account;

use App\Repositories\AccountRepository;

class AccountService
{
	public function insert(AccountRepository $accountRepository)
	{
		return $accountRepository->insert();
	}
}
