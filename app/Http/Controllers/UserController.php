<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //private $user = ["Thai", "Cuong", "Tien", "Hieu", "Ngoc"];
    private $leng = 0;
    public function index()
    {
        $users = DB::table('users')->get();
        return view('welcome', ['users' => $users]);
    }
    public function show(Request $request)
    {
        // if ($id) {
        //     dd($id);
        // }
        
        // dd($request->all());
        
        
        //echo $user->name;
        //$user2 = User::where('id', '<>', $id)->get();
        // $id = $request->get()
        $id = 1;

        if( $id == null) {
            $user = DB::table('users')->get();
            foreach ($user as $value) {
                echo $value->id . " " . $value->name . " " . $value->email . "<br/>";
            }
        } else {
            $user = DB::table('users')->where('id', $id)->first();
            //dd($user);
            return view('greeting', ['user' => $user]);
        }

        //return view('greeting',$user);
        
        //echo $user->name;
        //return view('greeting',['name' => $name]);
        // $this->leng = count($user, COUNT_NORMAL);
        // if ($id >= $this->leng) {
        //     return view('greeting',['name' => 'new member']);
        // } else {
        //     return view('greeting',['name' => $user[$id]]);
        // }
    }
    public function delete($id) 
    {
        $number = DB::table('users')->delete($id);
        if ($number > 0) {
            echo "Success";
        }
    }
}