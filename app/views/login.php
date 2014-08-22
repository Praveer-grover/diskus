<?php

	echo Form::open(array('action'=>'UserController@Login'));

	echo Form::text('username');

	echo Form::password('password');

	echo Form::submit('Log In');

	echo Form::close();
?>