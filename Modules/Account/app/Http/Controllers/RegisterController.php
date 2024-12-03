<?php

namespace Modules\Account\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Modules\Account\Http\Requests\LoginRequest;
use Modules\Account\Http\Requests\RegisterRequest;
use Modules\Account\Models\User;
use phpDocumentor\Reflection\DocBlock\Description;

//use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __invoke(RegisterRequest $request)
    {
        //        dd('ali naseri');
        try {
            $user = User::create([
                                     'name' => $request->name,
                                     'email' => $request->email,
                                     'password' => Hash::make($request->password),
                                 ]);

            // ورود خودکار کاربر
            Auth::logout();

            Auth::login($user);
            return redirect()->to('/')->with('success', 'You are regester and logined in!');
        } catch (\Exception $e) {
            // بازگرداندن تراکنش در صورت بروز خطا


            // ثبت خطا در لاگ برای بررسی
            Log::error('خطا در ثبت‌نام کاربر: ' . $e->getMessage());

            // بازگشت به فرم با پیام خطا
            return redirect()->back()->withInput()->withErrors(['error' => 'مشکلی در ثبت‌نام پیش آمد. لطفاً دوباره تلاش کنید.']);

        }
    }
}
