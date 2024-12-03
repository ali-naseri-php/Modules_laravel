<?php

namespace Modules\Account\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Modules\Account\Http\Requests\LoginRequest;

//use Illuminate\Support\Facades\Hash;

class LogoutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __invoke(Request $request)
    {
        // خروج کاربر
        Auth::logout();

        // بی‌اعتبار کردن سشن کاربر (اختیاری)
        $request->session()->invalidate();

        // تولید مجدد توکن CSRF (اختیاری)
        $request->session()->regenerateToken();

        // هدایت به صفحه ورود یا صفحه اصلی
        return redirect()->to('/')->with('success', 'با موفقیت از سیستم خارج شدید!');
    }
}
