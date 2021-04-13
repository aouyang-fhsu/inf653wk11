<?php 
    function get_makes() {
            global $db;
        
            $query = '
                SELECT * FROM makes
            ';
        
            $statement = $db->prepare($query);
            $statement->execute();
            $results = $statement->fetchAll();
            $statement->closeCursor();
            return $results;
    }

    function add_makes($makes_name) {
        global $db;
        $query = 
            'insert into makes (Make)
            values(:makes)';
            $statement = $db->prepare($query);
            $statement->bindValue(':makes', $makes_name);
            $statement->execute();
            $statement->closeCursor();
    }

    function delete_makes($makes_id){
        global $db;
        $query = 
            'delete from makes
            where ID = :makes_id';
            $statement = $db->prepare($query);
            $statement->bindValue(':makes_id', $makes_id);
            $statement->execute();
            $statement->closeCursor();
    }

?>