<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class LoginController extends Controller
{
    public function index() {
        if(Auth::check()) {
            return redirect()->route('main');
        }
        return view('login.login');
    }

    public function postLogin(Request $request) {
        $foundUser = User::where('email', $request->email)
                    ->where('password', $request->password)
                    ->first();
        $errorMessage = 'Email or Password is invalid!!!';
        if($foundUser) {
            if($foundUser->role == 1) {
                Auth::login($foundUser);
                return redirect('makeup/admin');
            }
            else {
                Auth::login($foundUser);
                return redirect()->route('main');
            }
        }
        return back()->withErrors(array(
            'errorMessage' => $errorMessage
        ));
    }

    public function logout() {
        Auth::logout();
        return redirect()->route('login');
    }

    public function store(Request $request) {

        $validator = Validator::make($request->all(),[
            'username_new' => ['required'] ,
            'email_new' => ['required', 'email'],
            'password_new' => ['required', 'min:8'],
        ]);

        if($validator->fails()) {
            //dd($validator->errors());
            return back()->withInput()->withErrors($validator->errors());
        }
        $user = new User;
        $user->username = $request->username_new;
        $user->password = $request->password_new;
        $user->email = $request->email_new;
        $user->role = 0;
//        $user = User::create([
//            'username' => $request->username_new,
//            'email' => $request->email_new,
//            'password' => $request->password_new,
//            'role' => 0
//        ]);
        $user->save();
        return redirect()->route('main');
    }
}
