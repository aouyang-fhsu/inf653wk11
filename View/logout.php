<?php  
    include('header.php');

    $firstname= $_SESSION['userid'];
    unset($_SESSION['userid']);

    session_destroy();

    $name = session_name();
    $expire = strtotime('-1 year');
    $params = session_get_cookie_params();
    $path = $params['path'];
    $domain = $params['domain'];
    $secure = $params['secure'];
    $httponly = $params['httponly'];
    setcookie($name, '', $expire, $path, $domain, $secure, $httponly);

?>
<br>
<h1>Thank you for signing out, <? $firstname ?>.</h1>
<br>]
<p><a href=".">Click here</a> to view our vehicle list.</p>
<br>
<?php include('footer.php'); ?>
