<?php

namespace App\Http\Controllers;

use App\User;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class userController extends Controller
{
    public function loadLogin(){
        return view('login');
    }

    public function userSignUp(Request $request){
        $this->validate($request,[
            'email' => 'required|email',
            'name' => 'required',
            'password' => 'required'
        ]);


        $email = $request['email'];
        $name = $request['name'];
        $password = bcrypt($request['password']);


        $user = new User();
        $user->email = $email;
        $user->name = $name;
        $user->password = $password;

        $user->save();

        Auth::login($user);

        return redirect()->route('home');
    }

    public function userSignIn(Request $request){
        $this->validate($request,[
            'email' => 'required',
            'password' => 'required'
        ]);
            if (Auth::attempt(['email' => $request['email'], 'password' => $request['password']])) {
                return redirect()->route('home');
            }
            return redirect()->back();
    }
}
