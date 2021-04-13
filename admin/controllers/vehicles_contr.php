<?php 
    include('View/header.php'); 
?>
<?php



switch($action){
    case 'add_vehicle':
        include('View/add_vehicle.php');
        break;
    case 'insert_vehicle':
        $model = filter_input(INPUT_POST, "model", FILTER_SANITIZE_STRING);
        $year = filter_input(INPUT_POST, 'year', FILTER_SANITIZE_STRING);
        $price = filter_input(INPUT_POST, 'price', FILTER_VALIDATE_INT);
    
        add_vehicle($class_id, $make_id, $type_id, $year, $model, $price);
        include('View/add_vehicle.php');
        break;
    case 'delete_vehicle':
        $vehicle_id = filter_input(INPUT_POST, 'vehicle_id', FILTER_VALIDATE_INT);
        delete_vehicle($vehicle_id);
        //include('View/vehicle_list.php');
        header('Location: index.php');
        break;
    default:
        $results = list_vehicles($class_id, $make_id, $type_id, $sort_by);
        include('View/vehicle_list.php');
        break;
}

?>