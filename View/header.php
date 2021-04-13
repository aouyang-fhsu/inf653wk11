<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zippy Used Autos</title>
    <link rel="stylesheet" href= "./View/css/main.css">

    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
    <script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
    <main>
        <header>
            <?php
                if($action <> 'register' && !isset($_SESSION['userid'])) { ?>     
                    <a href=".?action=register">Register</a>            
            <?php        
                } else if($action <> 'register' && $action <> 'logout' && isset($_SESSION['userid'])) {
                    $userid= $_SESSION['userid'];
            ?> 
            <p> Welcome <? $userid ?>! (<a href='.?action=logout'>Sign Out</a>)</p>
            <?php }?>
            
            
            <h1> Zippy Used Autos </h1>
        </header>
