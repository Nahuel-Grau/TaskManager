<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
   public function index(){
    return view('auth/login');
   }

   public function store(Request $request)
   {
       $this->validate($request, [
           'email' => 'required',
           'password' => 'required'
       ]);

       if(!auth()->attempt($request->only('email', 'password'), $request->remember)) {
           return back()->with('message', 'Incorrect credentials');
       }

       return redirect()->route('index.task');
   }
       
   
}
 