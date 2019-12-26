<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        return view('dashboard');
    }

    public function profile(Request $request)
    {
        return view('settings.profile');
    }

    public function profile_save(Request $request)
    {
        $user = auth()->user();
        // validate the response
        $request->validate([
            'name' => 'required|min:3|max:255',
            'email' => [
                'required',
                Rule::unique('users')->ignore($user->id),
            ],
        ]);

        $user->name = $request->name;
        $user->email = $request->email;

        $photo = $request->photo;

        if ($request->hasFile('photo')) {
            $request->validate([
                'photo' => 'image|mimes:jpeg,jpg,png'
            ]);
            $filename = Str::slug($request->name) . '-' . uniqid() . '.' . $photo->extension();
            $photo->storeAs('public/images/user', $filename);
            $user->photo = $filename;
        }

        $user->save();

        return back()->with(['alert' => 'Successfully updated your profile info', 'alert_type' => 'success']);
    }

    public function security(Request $request)
    {
        return view('settings.security');
    }

    public function security_save(Request $request)
    {
        $user = auth()->user();
        $request->validate([
            'password' => 'required|confirmed',
        ]);

        $user->password = Hash::make($request->password);
        $user->save();

        return back()->with(['alert' => 'Successfully updated your password', 'alert_type' => 'success']);
    }

    public function billing (Request $request)
    {
        return view('settings.billing');
    }

    public function billing_save(Request $request)
    {
        echo 'Successfully updated your billing info';
    }
    
}