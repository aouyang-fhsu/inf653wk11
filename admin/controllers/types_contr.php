<?php 
    include('View/header.php'); 
?>
<?php 
    $footer_type = 'types';

    switch($action){
        case 'add_types':
            $type = filter_input(INPUT_POST, 'type_name', FILTER_SANITIZE_STRING);
            add_types($type);
            $types = get_types();
            include('View/types_list.php');
            break;
        case 'delete_types':
            $type_id = filter_input(INPUT_POST, 'type_id', FILTER_SANITIZE_STRING);
            delete_types($type_id);
            $types = get_types();
            include('View/types_list.php');
            break;
        default:
            $types = get_types();
            include('View/types_list.php');
            break;

    }

?>