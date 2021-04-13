<?php 
    include('View/header.php'); 
?>
<?php 
    $footer_type = 'classes';

    switch($action){
        case 'add_classes':
            $class = filter_input(INPUT_POST, 'class_name', FILTER_SANITIZE_STRING);
            add_class($class);
            $classes = get_classes();
            include('View/classes_list.php');
            break;
        case 'delete_classes':
            $class_id = filter_input(INPUT_POST, 'class_id', FILTER_SANITIZE_STRING);
            $classes = get_classes();
            delete_class($class_id);
            include('View/classes_list.php');
            break;
        default:
            $classes = get_classes();
            include('View/classes_list.php');
            break;

    }

?>
