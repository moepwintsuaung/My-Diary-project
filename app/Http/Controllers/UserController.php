<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    // ၁။ Register လုပ်ခြင်း (Database ထဲ သိမ်းရန်)
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::login($user);

        return redirect('/diaries/create');
    }

    // ၂။ Login Form ပြရန်
    public function showLoginForm()
    {
        return view('login'); // login.blade.php ရှိရန်လိုသည်
    }

    // ၃။ Login ဝင်ခြင်း (အချက်အလက် စစ်ဆေးရန်)
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // အချက်အလက် မှန်မမှန် စစ်ဆေးခြင်း
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // မှန်ကန်မှသာ Create / Dashboard Page ဆီသို့ ဝင်ခွင့်ပေးမည်
            return redirect('/diaries/create');
        }

        // လွဲမှားနေလျှင် အမှားပြပြီး Login Page သို့ ပြန်ပို့မည်
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
}