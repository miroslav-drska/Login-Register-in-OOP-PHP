<?php 

require_once 'core/init.php';
$user = new User();
if(!user->isLoggedIn()) {
    Redirect::to('index.php');
}

if(Input::exists()) {
    if(Token::check(Input::get('token'))) {

    }
}
?>

<form action="" method="POST">
    <div class="field">
        <label for="password_current">Current password</label>
        <input type="password" name="password_current" id="password_current">
    </div>
    <div class="field">
        <label for="password_new">New password</label>
        <input type="password" name="password_new" id="password_new">
    </div>
    <div class="field">
        <label for="password_new_again">New password</label>
        <input type="password" name="password_new_again" id="password_new_again">
    </div>
    <input type="submit" value="Change">
    <input type="hidden" name="token" value="<?php echo Token::generate(); ?>">

</form>