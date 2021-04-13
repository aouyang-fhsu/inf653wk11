<?php 
    include('View/header.php'); 
?>
<?php 
    $footer_type = 'makes';

    switch($action){
        case 'add_makes':
            $makes_name = filter_input(INPUT_POST, 'makes_name', FILTER_SANITIZE_STRING);
            add_makes($makes_name);
            $makes = get_makes();
            include('View/makes_list.php');
            break;
        case 'delete_makes':
            $makes_id = filter_input(INPUT_POST, 'make_id', FILTER_SANITIZE_STRING);
            delete_makes($makes_id);
            $makes = get_makes();
            include('View/makes_list.php');
            break;
        default:
            $makes = get_makes();
            include('View/makes_list.php');
            break;

    }

?>