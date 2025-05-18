<?php

namespace App\Services;

use App\Services\Interfaces\ProfileServiceInterface;
use App\Repositories\Interfaces\ProfileRepositoryInterface;

class ProfileService implements ProfileServiceInterface
{
    protected $profileRepo;

    public function __construct(ProfileRepositoryInterface $profileRepo)
    {
        $this->profileRepo = $profileRepo;
    }

    public function getProfile($userId)
    {
        return $this->profileRepo->getProfile($userId);
    }

    public function updateProfile($userId, array $data)
    {
        return $this->profileRepo->updateProfile($userId, $data);
    }

    public function changePassword($userId, string $newPassword)
    {
        return $this->profileRepo->changePassword($userId, $newPassword);
    }
}