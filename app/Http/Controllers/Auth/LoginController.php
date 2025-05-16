<?php
namespace App\Http\Controllers\Auth;

use App\Services\Interfaces\LoginServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    protected $loginService;

    public function __construct(LoginServiceInterface $loginService)
    {
        $this->middleware('guest')->except('logout');
        $this->loginService = $loginService;
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email:rfc,dns',
            'password' => 'required|string|min:6'
        ], [
            'email.required' => 'Email là bắt buộc',
            'email.email' => 'Email không hợp lệ',
            'password.required' => 'Mật khẩu là bắt buộc',
            'password.min' => 'Mật khẩu phải có ít nhất 6 ký tự'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->only('email'));
        }

        $dataLogin = $request->only(['email', 'password']);
        $result = $this->loginService->login($dataLogin);

        if ($result['success']) {
            $user = Auth::guard('web')->user();
            
            if ($user->role == 1) {
                return redirect()->route('admin.dashboard');
            }
            
            return redirect()->route('user.dashboard');
        }

        return redirect()->back()
            ->withErrors(['login' => $result['message']])
            ->withInput($request->only('email'));
    }

    public function logout(Request $request)
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login.login');
    }
}