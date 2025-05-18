<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Interfaces\ProfileServiceInterface;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    protected $profileService;

    public function __construct(ProfileServiceInterface $profileService)
    {
        $this->profileService = $profileService;
    }

    public function showFromProfile()
    {
        $user = $this->profileService->getProfile(auth()->user()->user_id);
        return view('user.profile', compact('user'));
    }

    public function updateProfile(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'address' => 'nullable|string|max:255',
        ]);

        $userId = auth()->user()->user_id;
        $data = $request->only(['name', 'email', 'phone', 'address']);
        
        $this->profileService->updateProfile($userId, $data);
        
        return redirect()->back()->with('success', 'Profile updated successfully.');
    }

    public function updateAvatar(Request $request)
    {
        $request->validate([
            'avatar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $userId = auth()->user()->user_id;
        $user = $this->profileService->getProfile($userId);
        
        // Delete old avatar if it exists and is not the default
        if ($user->avatar && $user->avatar != 'default-avatar.jpg' && Storage::exists('public/avatars/' . $user->avatar)) {
            Storage::delete('public/avatars/' . $user->avatar);
        }
        
        // Store new avatar
        $avatarName = $userId . '_' . time() . '.' . $request->avatar->extension();
        $request->avatar->storeAs('public/avatars', $avatarName);
        
        // Update user avatar
        $this->profileService->updateProfile($userId, ['avatar' => $avatarName]);
        
        return redirect()->back()->with('success', 'Avatar updated successfully.');
    }

    public function changePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|min:8|confirmed',
        ]);

        $userId = auth()->user()->user_id;
        $user = $this->profileService->getProfile($userId);

        // Verify current password
        if (!Hash::check($request->current_password, $user->password)) {
            return redirect()->back()->withErrors(['current_password' => 'The current password is incorrect.']);
        }

        // Update password
        $this->profileService->changePassword($userId, $request->new_password);
        
        return redirect()->back()->with('success', 'Password changed successfully.');
    }
}
