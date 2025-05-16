<?php

namespace App\Repositories;

use App\Models\Account;
use Illuminate\Support\Facades\Hash;
use App\Repositories\Interfaces\RegisterRepositoryInterface;
class RegisterRepository implements RegisterRepositoryInterface
{
    protected $model;

    public function __construct(Account $account)
    {
        $this->model = $account;
    }

    public function create(array $data)
    {
        $data['password'] = Hash::make($data['password']);
        return $this->model->create($data);
    }
}
?>