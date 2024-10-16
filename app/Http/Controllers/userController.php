<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class userController extends Controller
{   
    public function login(Request $request){
        $loginfields=$request->validate([
            'email'=>['required'],
            'password'=>['required']
        ]);
        return 'login successful';
    }


    public function register(Request $request){
        $fields = $request->validate(
            [
            'name'=> ["required",'min:2','max:15', Rule::unique('users','name')],
            'email' => ["required","email",Rule::unique('users','email')],
            "password" => ["required",'min:3','max:15']
            ]
        );
        $fields['password']=bcrypt($fields['password']);
        $user=User::create($fields);
        auth()->login($user);
        return redirect('/');
    }
}
