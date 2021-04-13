<?php
    $dsn = 'mysql:host=lyn7gfxo996yjjco.cbetxkdyhwsb.us-east-1.rds.amazonaws.com;dbname=gkv9is7utc3ug7ki';
    $username= 'oqotc5iofcpe1kde';
    $pw='hkbstzyjy4ttspkh'    ;

    try {
        $db = new PDO($dsn, $username, $pw);
    } catch(PDOException $e) {
        $error_message = 'Database Error: ';
        $error_message .= $e->getMessage();
        include('view/error.php');
        exit(); 
    }
?>
