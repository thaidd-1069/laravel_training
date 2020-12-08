<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        $users = DB::table('users')->get();
        return view('welcome', ['users' => $users]);
    }
    public function show($id)
    {
        if( $id == null) {
            $user = DB::table('users')->get();
            foreach ($user as $value) {
                echo $value->id . " " . $value->name . " " . $value->email . "<br/>";
            }
        } else {
            if ($id == 3) $id = 1; 
            $user = User::find($id);
            if (!$user) {
                echo "Khong co nguoi dung";
            } else {
                foreach ($user->reactions as $reac) {
                    echo $reac . "<br/>";
                }
            }
        }

    }
    public function delete($id) 
    {
        $number = DB::table('users')->delete($id);
        if ($number > 0) {
            echo "Success" . $id;
        }
    }
}