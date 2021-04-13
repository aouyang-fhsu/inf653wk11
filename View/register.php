<?php include('header.php'); ?>

<?php if (!$firstname) { ?>

    <form  action="." method="GET">
        <input type='hidden' name='action' value='register'>
        <label for='firstname'>Please enter your first name: </label> 
        <input id='firstname' type='text' name='firstname' maxlength='30'?>
        <input type='submit' value="Register">
    </form>

<?php } else { ?>
    <br>
    <h1> Thank you for registering, <?= $firstname ?>!</h1>
    <br>
    <p><a href='.'>Click here</a>to view your vehicle list.</p>
    <br>
<?php } ?>
<?php include('footer.php'); ?>