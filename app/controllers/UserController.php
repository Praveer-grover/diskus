<?php
	
	class UserController extends BaseController{

		function Signup(){
			if(Input::has('username')){
				$user = new User;	
				$user->full_name=Input::get('full_name');
				$user->username = Input::get('username');
				$user->password = Hash::make(Input::get('password'));
				$user->email = Input::get('email');
				$user->save();
			}
			
		}

		function Login(){
			if(Input::has('username')){
				$credentials = Input::only('username','password');

				if(Auth::attempt($credentials)){
					$username = Input::get('username');
					Session::put('user',$username);
					return Redirect::intended('/');
				}
				else
					return Redirect::to('login');
			}		
		}
	}

?>