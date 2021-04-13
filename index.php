
<?php
    //start session
    $lifetime = 60 * 60 * 24 * 14;
    session_set_cookie_params($lifetime, '/');
    session_start();
    
    //create a userid array
    //if (empty($_SESSION['userid'])) {$_SESSION['userid'] = array();}

    require('model/database.php');
    require('model/vehicles_db.php');
    require('model/classes_db.php');
    require('model/types_db.php');
    require('model/makes_db.php');
    
    $class_id = filter_input(INPUT_POST, 'class_id', FILTER_VALIDATE_INT);
    $make_id = filter_input(INPUT_POST, 'make_id', FILTER_VALIDATE_INT);
    $type_id = filter_input(INPUT_POST, 'type_id', FILTER_VALIDATE_INT);
    
    $model = filter_input(INPUT_POST, "model", FILTER_SANITIZE_STRING);
    $type = filter_input(INPUT_POST, 'type', FILTER_SANITIZE_STRING);
    $class = filter_input(INPUT_POST, 'class', FILTER_SANITIZE_STRING);

    $sort_by = filter_input(INPUT_POST, 'sort_by', FILTER_SANITIZE_STRING);
    
    $makes = get_makes();
    $types = get_types();
    $classes = get_classes();

    $results = list_vehicles($class_id, $make_id, $type_id, $sort_by);
    

    $action = filter_input(INPUT_POST, 'action', FILTER_SANITIZE_STRING);
    if(!$action) {
        $action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);
    }

    $firstname = filter_input(INPUT_GET, "firstname", FILTER_SANITIZE_STRING);
    $footer_type = '';

    if(!empty($firstname)) {
        $_SESSION['userid'] = $firstname;
    } 
    switch($action){
    case 'logout':
        include('logout.php');
        break;
    case 'register':
        include('View/register.php');
        break;
    default:
        include('View/vehicle_list.php');
        break;    
}

    
?>
