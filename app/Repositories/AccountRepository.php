<?php
namespace App\Repositories;

use App\Models\Account;
use App\Repositories\Interfaces\AccountRepositoryInterface;
use Illuminate\Support\Facades\Hash;

class AccountRepository implements AccountRepositoryInterface
{
    public function findByEmail(string $email)
    {
        return Account::where('email', $email)->first();
    }

    public function updatePassword($userId, string $newPassword)
    {
        dd($userId, $newPassword);
        return Account::where('user_id', $userId)
                      ->update(['password' => Hash::make($newPassword)]);
    }
}
