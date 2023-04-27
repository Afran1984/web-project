<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Session;

class SDProject extends Controller
{
    public function login(){
        return view("mainPage.Login");

    }
    public function registration(){
        return view("mainPage.registration");

    }
    public function registrUser(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:8|max:14',
            'roll'=>'required',
            'depf'=>'required',
            'contact'=>'required'
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->roll = $request->roll;
        $user->depf = $request->depf;
        $user->contact = $request->contact;
        $res = $user->save();
        if($res){
            return back()->with('success', 'you have register');
        }else{
            return back()->with('fail', 'resister Failed');
        }

    }
    public function loginUser(Request $request){
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:8|max:14',
            'roll'=>'required'
        ]);
        $user = User::where('email','=',$request->email)->first();
        if($user){
            if(Hash::check($request->password, $user->password)){
                $request->session()->put('loginId', $user->id);
                return redirect('dashboard');

            }else{
                return back()->with('fail','This Password is not matching');
            }

        }else{
            return back()->with('fail','This Email is not matching');
        }

    }
    public function dashboard(){
        $data = array();
        if(Session::has('loginId')){
            $data = User::where('id','=',Session::get('loginId'))->first();
        }
        return view('dashboard', compact('data'));
    }
    public function logout(){
        if(Session::has('loginId')){
            Session::pull('loginId');
            return redirect('login');

        }

    }
}
