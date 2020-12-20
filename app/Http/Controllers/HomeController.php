<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('ahome');
    }


    //login
    public function getLogin(){
        return view('login');
    }

    public function postLogin(Request $request){
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(Auth::guard('admin')->attempt(['email'=>$request->email, 'password' => $request->password])){
            return redirect()->intended('/admin/home');
        }
        else if(Auth::guard('user')->attempt(['email'=>$request->email, 'password'=> $request->password])){
            return redirect()->intended('/biography/home');
        }
    }

    public function logout(){
        if(Auth::guard('admin')->check()){
            Auth::guard('admin')->logout();
        } elseif (Auth::guard('user')->check()){
            auth::guard('user')->logout();
        }
        return redirect('/');
    }
    
}
