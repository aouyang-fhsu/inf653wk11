<?php 
    function get_types() {
            global $db;
        
            $query = '
                SELECT * FROM types
            ';
        
            $statement = $db->prepare($query);
            $statement->execute();
            $results = $statement->fetchAll();
            $statement->closeCursor();
            return $results;
    }

    function add_types($types_name) {
        global $db;
        $query = 
            'insert into types (Type)
            values(:types)';
            $statement = $db->prepare($query);
            $statement->bindValue(':types', $types_name);
            $statement->execute();
            $results = $statement->fetchAll();
            $statement->closeCursor();
            return $results;
    }

    function delete_types($types_id){
        global $db;
        $query = 
            'delete from types
            where ID = :types';
            $statement = $db->prepare($query);
            $statement->bindValue(':types', $types_id);
            $statement->execute();
            $statement->closeCursor();
    }
    
?>