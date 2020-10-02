<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function getLogin()
{
	return view('backend.login');

}
	public function postLogin(Request $request){
		$arr =['email'=>$request -> email, 'password' => $request -> password];
		if ($request->remember='Remeber me') {
			$remember= true;
			# code...
		}
		else{$remember= false;}
		if (Auth::attempt($arr,$remember)) {
			return redirect()->intended('admin/home');
		}else{
			return back()->withInput()->with('error','tài khoản hoặc mật khẩu chưa đúng!!!');		}
	}


		
}