<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Helper;

use Illuminate\Support\Facades\Mail;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function getRegister(){
        return view('register');
    }
    public function Register(Request $request){
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required'
        ]);
        $userExist = User::where('email',$request->email)->first();
        if(!$userExist){
            $valid_user = User::create([
            'name' => $request->name,
            'email'=>$request->email,
            'password'=> Hash::make($request->password)
            ]);
            Auth::login($valid_user);
            //dd($request);
            //Helper::Mail($request);
            return redirect('/dashboard');
        }else{
            //dd($request);
            return redirect()->back()
            ->with('msg','user already exist');
        }
        
    }
    public function getLogin(){
        return view('login');
    }
    public function Login(Request $request){
       $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        $db_user = User::where('email',$request->email)->first();
        $validate =Hash::check($request->password, $db_user->password);
        if ($validate){
            Auth::login($db_user);
            //Helper::Mail($request);
            return view('dashboard');
        }else{
            return redirect()->back()
            ->with('msg','pls make sure to input correct data');
        }
    }
    public function Logout(){
        if (Auth::login()){
            Auth::logout();
            return redirect('');

        }
    }
    public function Dashboard(){
        return view('dashboard');
    }
}
