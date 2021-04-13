<?php 
    function get_classes() {
        global $db;

        $query = '
            SELECT * FROM classes
        ';

        $statement = $db->prepare($query);
        $statement->execute();
        $results = $statement->fetchAll();
        $statement->closeCursor();
        return $results;
    }

    function add_classes($class_name) {
        global $db;
        $query = 
            'insert into classes (Class)
            values(:class)';
            $statement = $db->prepare($query);
            $statement->bindValue(':class', $class_name);
            $statement->execute();
            $results = $statement->fetchAll();
            $statement->closeCursor();
            return $results;
    }

    function delete_classes($class_id){
        global $db;
        $query = 
            'delete from classes
            where ID = :class_id';
            $statement = $db->prepare($query);
            $statement->bindValue(':class_id', $class_id);
            $statement->execute();
            $statement->closeCursor();
    }

?>
