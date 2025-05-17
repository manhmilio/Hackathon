<?php
namespace App\Services;

use App\Repositories\Interfaces\AccountRepositoryInterface;
use Illuminate\Support\Facades\Password;
use App\Models\Account;
use Illuminate\Notifications\Notifiable;
use App\Notifications\AccountResetPassword;





class AuthService
{
    protected $accountRepo;

    public function __construct(AccountRepositoryInterface $accountRepo)
    {
        $this->accountRepo = $accountRepo;
    }

    public function sendResetLinkEmail($email)
    {
       $account = $this->accountRepo->findByEmail($email);

        if (!$account) {
            return Password::INVALID_USER;
        }

        $token = Password::broker('accounts')->createToken($account);
        $account->notify(new AccountResetPassword($token));

        return Password::RESET_LINK_SENT;
    }

    public function resetPassword(array $credentials)
    {
        return Password::broker('accounts')->reset(
            $credentials,
            function ($user, $password) {
                $user->password = bcrypt($password);
                $user->save();
            }
        );
    }
}
