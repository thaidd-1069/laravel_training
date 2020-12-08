<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $validateData = $request->validate([
            'email' => 'email:rfc,dns|required',
            'password' => 'required'
        ]);
        $email = $request->input('email');
        $pass = $request->input('password');

        if ($email && $pass) {
            $user = User::where('email', $email)->first();
            if ($user && $user->password == $pass) {
                return view('greeting', ['user' => $user]);
            } else {
                echo "Email hoac mat khau sai";
            }
        } else {
            echo "Thieu thong tin";
        }
        // if (isset($_POST['exampleInputEmail1'])) {
        //     if (isset($_POST['exampleInputPassword1'])) {
                
        //         $user = DB::table('users')->where('email', $_POST['exampleInputEmail1'])->first();
                
        //         if ($user == null) 
        //             echo "Email chua dang ki";
        //         else if (isset($user->password) && $user->password == $_POST['exampleInputPassword1']) 
        //             return view('greeting', ['user' => $user]);
        //         else 
        //             echo "Sai mat khau";
        //     }
        // }

    }

    public function register(Request $request)
    {
        $validateData = $request->validate([
            'email' => 'email:rfc,dns|required|unique:users',
            'password' => 'required|min:8',
            'repassword' => 'same:password',
            'name' => 'required'
        ]);
        $email = $request->input('email');
        $pass = $request->input('password');
        $name = $request->input('name');

        User::insert(
            ['name' => $name, 'email' => $email, 'password' => $pass]
        );
        $user = User::where('email', $email)->first();
        
        return view('greeting', ['user' => $user]);
        // if (isset($_POST['exampleInputEmail1']) && isset($_POST['exampleInputUsername']) && isset($_POST['exampleInputPassword1']) && isset($_POST['exampleInputPassword2'])) {
        //     if (isset($_POST['exampleInputPassword1'])) {
                
        //         $user = DB::table('users')->where('email', $_POST['exampleInputEmail1'])->first();
                
        //         if ($user == null) 
        //             echo "Email chua dang ki";
        //         else if (isset($user->password) && $user->password == $_POST['exampleInputPassword1']) 
        //             return view('greeting', ['user' => $user]);
        //         else 
        //             echo "Sai mat khau";
        //     }
        // } else {
        //     return view('greeting', ['error' => $error]);
        // }
    }
}
