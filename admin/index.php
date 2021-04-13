<?php
    require('../model/database.php');
    require('../model/vehicles_db.php');
    require('../model/makes_db.php');
    require('../model/types_db.php');
    require('../model/classes_db.php');
    require('../model/admin_db.php');

    $make_id = filter_input(INPUT_POST, 'make_id', FILTER_VALIDATE_INT);
    $makes_name = filter_input(INPUT_POST, 'makes_name', FILTER_VALIDATE_INT);

    $class_id = filter_input(INPUT_POST, 'class_id', FILTER_VALIDATE_INT);
    $type_id = filter_input(INPUT_POST, 'type_id', FILTER_VALIDATE_INT);
    
    $model = filter_input(INPUT_POST, "model", FILTER_SANITIZE_STRING);
    $type = filter_input(INPUT_POST, 'type', FILTER_SANITIZE_STRING);
    $class = filter_input(INPUT_POST, 'class', FILTER_SANITIZE_STRING);

    $sort_by = filter_input(INPUT_POST, 'sort_by', FILTER_SANITIZE_STRING);
    
    $makes = get_makes();
    $types = get_types();
    $classes = get_classes();



    $action = filter_input(INPUT_POST, 'action', FILTER_SANITIZE_STRING);
    if(!$action) {
        $action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);
    }

    switch($action){
        case 'edit_makes':
            include('controllers/makes_contr.php');
            break;
        case 'delete_makes':
            include('controllers/makes_contr.php');
            break;
        case 'add_makes':
            include('controllers/makes_contr.php');
            break;
        case 'edit_types':
            include('controllers/types_contr.php');
            break;
        case 'delete_types':
            include('controllers/types_contr.php');
            break;   
        case 'add_types':
            include('controllers/types_contr.php');
            break;        
        case 'edit_classes':
            include('controllers/classes_contr.php');
            break;
        case 'delete_classes':
            include('controllers/classes_contr.php');
            break;
        case 'add_classes':
            include('controllers/classes_contr.php');
            break;
        case 'login':
            include('controllers/admin_contr.php');
            break;
        case 'show_login':
            include('controllers/admin_contr.php');
            break;
        case 'register':
            include('controllers/admin_contr.php');
            break;
        case 'show_register':
            include('controllers/admin_contr.php');
            break;
        case 'logout':
            include('controllers/admin_contr.php');
            break;
        default:
            include('controllers/vehicles_contr.php');
            break;
    }
        

    
    include('View/footer.php');
    
?>
