<?php if (!empty($login_message)) { ?>
    <p><? $login_message ?></p>
<?php}?>


<form  action="." method="GET">
    <p> Please fill in your credentials to login.</p>
    <input type='hidden' name='action' value='login'>

    <label for='login'>Username: </label> 
    <input id='login' type='text' name='username' maxlength='30'?>

    <label for='password'>Password: </label> 
    <input id='password' type='text' name='password' maxlength='30'?>


    <input type='submit' value="Sign In">
</form>
