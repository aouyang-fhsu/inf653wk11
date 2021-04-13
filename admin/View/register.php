<?php include('header.php'); ?>

<?php if (!empty($errors)) { 
    foreach ($errors as $error) :
        echo $error . "<br>";
    endforeach;
}?>

<p> Register a new admin user</p>
<form  action="." method="GET">
    <input type='hidden' name='action' value='register'>

    <label for='username'>Username: </label> 
    <input id='username' type='text' name='username' maxlength='30'?>

    <label for='password'>Password: </label> 
    <input id='password' type='text' name='password' maxlength='30'?>

    <label for='confirm_password'>Confirm Password: </label> 
    <input id='confirm_password' type='text' name='confirm_password' maxlength='30'?>


    <input type='submit' value="Register">
</form>
