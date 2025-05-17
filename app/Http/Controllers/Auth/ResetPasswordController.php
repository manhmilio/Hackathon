<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Services\AuthService;
use Illuminate\Http\Request;

class ResetPasswordController extends Controller
{
    protected $authService;

    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;
    }

    public function showResetForm(Request $request, $token = null)
    {
        return view('auth.passwords.reset')->with([
            'token' => $token,
            'email' => $request->email
        ]);
    }

    public function resetPassword(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email|exists:Accounts,email',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $status = $this->authService->resetPassword($request->only(
            'email', 'password', 'password_confirmation', 'token'
        ));

        if ($status === \Password::PASSWORD_RESET) {
            return redirect()->route('login.login')->with('status', __($status));
        }

        // Xử lý token không hợp lệ hoặc hết hạn
        if ($status === \Password::INVALID_TOKEN) {
            return redirect()->route('password.request')
                ->with('error', 'Invalid or expired password reset link. Please request a new link.');
        }

        // Các lỗi khác
        return redirect()->route('password.reset', $request->token)
            ->withInput(['email' => $request->email])
            ->withErrors(['email' => [__($status)]]);
    }
}

