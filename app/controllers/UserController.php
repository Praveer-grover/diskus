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

				$name = Input::get('username');
				$password = Input::get('password');
				echo $name."<br>".$password;
			}		
		}
	}

?>