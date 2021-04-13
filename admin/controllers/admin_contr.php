<?php 
    session_start();

    
    $action = filter_input(INPUT_POST, 'action');
    if ($action == NULL){
        $action = filter_input(INPUT_GET, 'action');
        if($action == NULL){
            $action = 'login';
        }
    }

    switch($action){
        case 'login':
            $username = filter_input(INPUT_GET, 'username');
            $password = filter_input(INPUT_GET, 'password');

            if (is_valid_admin($username, $password)){
                $_SESSION['is_valid_admin'] = true;
                include('View/vehicle_list.php');
            } else {
                $login_message='You must login to view this page.';
                include('View/login.php');
            }
            break;
        case 'show_login':
            include('View/login.php');
            break;
        case 'register':
            $username = filter_input(INPUT_GET, 'username');
            $password = filter_input(INPUT_GET, 'password');
            $confirm_password = filter_input(INPUT_GET, 'confirm_password');

            include('util/valid_register.php');
            $errors = valid_registration($username, $password, $confirm_password);
            
            if (!empty($errors)){
                include('View/register.php');
            } else {
                add_admin($username, $password);
                $_SESSION['is_valid_admin'] = true;
                header('View/vehicle_list.php');
            }
            
            break;
        case 'show_register':
            include('View/register.php');
            break;
        case 'logout':
            $_SESSION = array();        
            session_destroy();
            $login_message = 'You have been logged out.';
            include('View/Login.php');
            break;
        default:
            include('View/classes_list.php');
            break;

    }

?>
