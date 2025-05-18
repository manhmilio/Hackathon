<?php
namespace App\Repositories;

use App\Models\Account;
use App\Repositories\Interfaces\ProfileRepositoryInterface;
use Illuminate\Support\Facades\Hash;

class ProfileRepository implements ProfileRepositoryInterface
{
    public function getProfile($userId)
    {
        return Account::findOrFail($userId);
    }

    public function updateProfile($userId, array $data)
    {
        $user = Account::findOrFail($userId);
        return $user->update($data);
    }

    public function changePassword($userId, string $newPassword)
    {
        $user = Account::findOrFail($userId);
        return $user->update(['password' => Hash::make($newPassword)]);
    }
}