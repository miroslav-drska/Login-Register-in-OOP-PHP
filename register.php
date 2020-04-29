<?php

require_once 'core/init.php';

if(Input::exists()) {
	$validate = new Validate();
	$validation = $validate->check($_POST, array(
		'username' => array(
			'required' => true,
			'min'      => 2,
			'max'      => 20,
			'unique'   => 'users'
		),
		'password' => array(
			'required' => true,
			'min'      => 6,
		),
		'password_again' => array(
			'required' => true,
			'matches'  => 'password'
		),
		'name' => array(
			'required' => true,
			'min'      => 2,
			'max'      => 50
		)
	));

	if($validation->passed()) {
		// register user
		echo 'passed';
		 
	} else {
		foreach($validation->errors() as $error) {
			echo $error . '<br>';
		}
	}
}

?>


<form action="" method="post">
	<div class="field">
		<label for="username">Username</label>
		<input type="text" name="username" id="username" value="<?php echo Input::get('username'); ?>" autocomplete="off">
	</div>
	<div class="field">
		<label for="password" >Choose a password</label>
		<input type="password" name="password" id="password">
	</div>
	<div class="field">
		<label for="password_again" >Retype your password</label>
		<input type="password" name="password_again" id="password_again">
	</div>
	<div class="field">
		<label for="name" >Name</label>
		<input type="text" name="name" id="name" value="<?php echo Input::get('name'); ?>">
	</div>

	<input type="submit" value="Register">
</form>