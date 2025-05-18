<?php

namespace App\Services\Interfaces;

interface ProfileServiceInterface
{
    public function getProfile($userId);
    public function updateProfile($userId, array $data);
    public function changePassword($userId, string $newPassword);
}