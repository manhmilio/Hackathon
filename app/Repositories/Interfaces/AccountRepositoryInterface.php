<?php
namespace App\Repositories\Interfaces;

interface AccountRepositoryInterface
{
    public function findByEmail(string $email);
    public function updatePassword($userId, string $newPassword);
}
