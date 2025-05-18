<?php
namespace App\Repositories\Interfaces;

interface ProfileRepositoryInterface
{
    public function getProfile($userId);
    public function updateProfile($userId, array $data);
    public function changePassword($userId, string $newPassword);
}