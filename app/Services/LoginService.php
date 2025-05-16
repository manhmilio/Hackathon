<?php
namespace App\Services;

use App\Repositories\Interfaces\LoginRepositoryInterface;
use App\Services\Interfaces\LoginServiceInterface;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;

class LoginService implements LoginServiceInterface
{
    protected $loginRepo;

    public function __construct(LoginRepositoryInterface $loginRepo)
    {
        $this->loginRepo = $loginRepo;
    }

    public function login(array $data)
    {
        if (!isset($data['email']) || empty($data['email'])) {
            return [
                'success' => false,
                'message' => 'Email là bắt buộc'
            ];
        }

        $key = 'login-attempt:' . $data['email'] . ':' . request()->ip();

        if (RateLimiter::tooManyAttempts($key, 5)) {
            $seconds = RateLimiter::availableIn($key);
            $minutes = ceil($seconds / 60); 
            return [
                'success' => false,
                'message' => "Quá nhiều lần thử đăng nhập. Vui lòng thử lại sau {$minutes} phút."
            ];
        }

        $account = $this->loginRepo->findBy('email', $data['email']);

        if (!$account) {
            RateLimiter::hit($key, 1800); 
            return [
                'success' => false,
                'message' => 'Email hoặc mật khẩu không đúng'
            ];
        }

        if (!Hash::check($data['password'], $account->password)) {
            RateLimiter::hit($key, 1800); 
            return [
                'success' => false,
                'message' => 'Email hoặc mật khẩu không đúng'
            ];
        }

        if ($account->is_active == 0) {
            return [
                'success' => false,
                'message' => 'Tài khoản của bạn đã bị khóa'
            ];
        }

        Auth::guard('web')->login($account);
        request()->session()->regenerate();
        session(['user' => $account]);

        RateLimiter::clear($key);

        return [
            'success' => true,
            'message' => 'Đăng nhập thành công'
        ];
    }
}