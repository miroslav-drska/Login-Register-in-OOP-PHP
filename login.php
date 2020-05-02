<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<?php
    if(Input::exists()) {
        if(Token::check(Input::get('token'))) {

            $validate = new Validate();
            $validation = $validate->check($_POST, array(
                'username' => array('required' => true),
                'password' => array('required' => true)
            ));

            if($validation->passed()) {
                // log user in
            } else {
                foreach($validation->errors() as $error) {
                    echo $error . '<br>';
                }
            }
        }
    }
?>

<body>
    <form action="" method="post">
        <div class="field">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" autocomplete="off">
        </div>
        <div class="field">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" autocomplete="off">
        </div>
        <input type="hidden" name="token" value="<php echo Token::generate(); ?>">
        <input type="submit" value="Log In">
    </form>
</body>
</html>