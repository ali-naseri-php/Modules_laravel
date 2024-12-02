<?php

namespace Modules\Account\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Modules\Account\Http\Requests\LoginRequest;
//use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __invoke(LoginRequest $request)
    {  $credentials = $request->only('email', 'password');
//dd(Hash::make('echo ali'));
        if (Auth::attempt($credentials)) {
//            dd('ali naseri');
            return redirect()->to('/')->with('success', 'You are logged in!');
        }

        return back()->withErrors(['email' => 'Invalid credentials'])->withInput();
    }
}
