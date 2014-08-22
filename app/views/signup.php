<?php
	echo Form::open(array('action'=>'UserController@Signup'));

	echo Form::text('full_name');

	echo Form::text('username');

	echo Form::password('password');

	echo Form::email('email');

	echo Form::submit('Signup');

	echo Form::close();
?>