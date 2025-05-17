<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Services\AuthService;
use Illuminate\Http\Request;

class ForgotPasswordController extends Controller
{
    protected $authService;

    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;
    }

    public function showForgotPasswordForm()
    {
        return view('auth.recovery');
    }

    public function sendResetLink(Request $request)
    {
        $request->validate(['email' => 'required|email|exists:Accounts,email']);
        $status = $this->authService->sendResetLinkEmail($request->email);

        return $status === \Password::RESET_LINK_SENT
            ? back()->with('status', __($status))
            : back()->withErrors(['email' => __($status)]);
    }
}
