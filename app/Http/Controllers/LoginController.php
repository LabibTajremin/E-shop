<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use storage\framework\sessions;
use App\User;

class LoginController extends Controller {

    //

    public function pageshow() {
        return view('loginRegister');
    }

    public function login(Request $request) {
        $email = $request->email;
        $pass = md5($request->password);
        $user = DB::table('users')->where([
                    ['email', $email],
                    ['password', $pass]
                ])->first();


        if (!empty($user)) {
            $request->session()->put('username', $user->username);
            $request->session()->put('name', $user->name);
            $request->session()->put('email', $user->email);
            $request->session()->put('password', $user->password);
            $request->session()->put('cart_count', 0 );

            $username = $request->session()->get('username');
            return view('index', compact('username'));
        }
    }

    public function register(Request $request) {
        $email = $request->email;
        $pass = md5($request->password);
        $username = $request->username;
        $name = $request->name;
        $user = new User();
        $user->name = $name;
        $user->username = $username;
        $user->email = $email;
        $user->password = $pass;
        $user->save();
        $request->session()->put('username', $user->username);
        $request->session()->put('name', $user->name);
        $request->session()->put('email', $user->email);
        $request->session()->put('password', $user->password);
        $request->session()->put('cart_count', 0 ); 
        $username = $request->session()->get('username');
        return view('index', compact('username'));
    }
	
	
	public function userDetail(Request $request) {
        
        $user['username'] = $request->session()->get('username');
        $user['name'] = $request->session()->get('name');
        $user['email'] = $request->session()->get('email');
        $username = $request->session()->get('username');
        return view('userdetail', compact('user','username'));
    }
    
    
    public function logout(Request $request) {
        $request->session()->flush();
        return view('index');
        
    }

}
