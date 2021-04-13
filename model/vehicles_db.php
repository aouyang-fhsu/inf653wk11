<?php 
    
    function select_all_vehicles_year(){
        global $db;

        $query = '
            SELECT v.ID, v.class_id, v.type_id, v.make_id, v.Year, m.Make, v.Model, t.Type, c.Class, v.Price
            from vehicles as v
            INNER JOIN types as t
                on v.type_id = t.ID
            inner join makes as m
                on v.make_id = m.ID
            INNER join classes as c
                on c.ID = v.class_id
            ORDER by v.Year DESC
        ';
        $statement = $db->prepare($query);
        $statement->execute();
        $results = $statement->fetchAll();
        $statement->closeCursor();
        return $results;
    }
    
    function select_all_vehicles_price(){
        global $db;

        $query = '
            SELECT v.ID, v.class_id, v.type_id, v.make_id, v.Year, m.Make, v.Model, t.Type, c.Class, v.Price
            from vehicles as v
            INNER JOIN types as t
                on v.type_id = t.ID
            inner join makes as m
                on v.make_id = m.ID
            INNER join classes as c
                on c.ID = v.class_id
            ORDER by v.Price DESC
        ';
        $statement = $db->prepare($query);
        $statement->execute();
        $results = $statement->fetchAll();
        $statement->closeCursor();
        return $results;
    }

    function select_vehicles_make_price($make_id){
        global $db;

        $query = '
            SELECT v.ID, v.class_id, v.type_id, v.make_id, v.Year, m.Make, v.Model, t.Type, c.Class, v.Price
            from vehicles as v
            INNER JOIN types as t
                on v.type_id = t.ID
            inner join makes as m
                on v.make_id = m.ID
            INNER join classes as c
                on c.ID = v.class_id
            where make_id = :make_id
            ORDER by v.Price DESC
        ';
        $statement = $db->prepare($query);
        $statement->bindValue(':make_id', $make_id);
        $statement->execute();
        $results = $statement->fetchAll();
        $statement->closeCursor();
        return $results;
    }

    function select_vehicles_make_year($make_id){
        global $db;

        $query = '
            SELECT v.ID, v.class_id, v.type_id, v.make_id, v.Year, m.Make, v.Model, t.Type, c.Class, v.Price
            from vehicles as v
            INNER JOIN types as t
                on v.type_id = t.ID
            inner join makes as m
                on v.make_id = m.ID
            INNER join classes as c
                on c.ID = v.class_id
            where make_id = :make_id
            ORDER by v.Year DESC
        ';
        $statement = $db->prepare($query);
        $statement->bindValue(':make_id', $make_id);
        $statement->execute();
        $results = $statement->fetchAll();
        $statement->closeCursor();
        return $results;
    }


    function select_vehicles_class_price($class_id){
        global $db;

        $query = '
            SELECT v.ID, v.class_id, v.type_id, v.make_id, v.Year, m.Make, v.Model, t.Type, c.Class, v.Price
            from vehicles as v
            INNER JOIN types as t
                on v.type_id = t.ID
            inner join makes as m
                on v.make_id = m.ID
            INNER join classes as c
                on c.ID = v.class_id
            where class_id = :class_id
            ORDER by v.Price DESC
        ';
        $statement = $db->prepare($query);
        $statement->bindValue(':class_id', $class_id);
        $statement->execute();
        $results = $statement->fetchAll();
        $statement->closeCursor();
        return $results;
    }

    function select_vehicles_class_year($class_id){
        global $db;

        $query = '
            SELECT v.ID, v.class_id, v.type_id, v.make_id, v.Year, m.Make, v.Model, t.Type, c.Class, v.Price
            from vehicles as v
            INNER JOIN types as t
                on v.type_id = t.ID
            inner join makes as m
                on v.make_id = m.ID
            INNER join classes as c
                on c.ID = v.class_id
            where class_id = :class_id
            ORDER by v.Year DESC
        ';
        $statement = $db->prepare($query);
        $statement->bindValue(':class_id', $class_id);
        $statement->execute();
        $results = $statement->fetchAll();
        $statement->closeCursor();
        return $results;
    }

    function select_vehicles_type_price($type_id){
        global $db;

        $query = '
            SELECT v.ID, v.class_id, v.type_id, v.make_id, v.Year, m.Make, v.Model, t.Type, c.Class, v.Price
            from vehicles as v
            INNER JOIN types as t
                on v.type_id = t.ID
            inner join makes as m
                on v.make_id = m.ID
            INNER join classes as c
                on c.ID = v.class_id
            where type_id = :type_id
            ORDER by v.Price DESC
        ';
        $statement = $db->prepare($query);
        $statement->bindValue(':type_id', $type_id);
        $statement->execute();
        $results = $statement->fetchAll();
        $statement->closeCursor();
        return $results;
    }

    function select_vehicles_type_year($type_id){
        global $db;

        $query = '
            SELECT v.ID, v.class_id, v.type_id, v.make_id, v.Year, m.Make, v.Model, t.Type, c.Class, v.Price
            from vehicles as v
            INNER JOIN types as t
                on v.type_id = t.ID
            inner join makes as m
                on v.make_id = m.ID
            INNER join classes as c
                on c.ID = v.class_id
            where type_id = :type_id
            ORDER by v.Year DESC
        ';
        $statement = $db->prepare($query);
        $statement->bindValue(':type_id', $type_id);
        $statement->execute();
        $results = $statement->fetchAll();
        $statement->closeCursor();
        return $results;
    }


    function select_vehicles_class_make_price($class_id, $make_id){
        global $db;

        $query = '
            SELECT v.ID, v.class_id, v.type_id, v.make_id, v.Year, m.Make, v.Model, t.Type, c.Class, v.Price
            from vehicles as v
            INNER JOIN types as t
                on v.type_id = t.ID
            inner join makes as m
                on v.make_id = m.ID
            INNER join classes as c
                on c.ID = v.class_id
            where make_id = :make_id and class_id = :class_id
            ORDER by v.Price DESC
        ';
        $statement = $db->prepare($query);
        $statement->bindValue(':make_id', $make_id);
        $statement->bindValue(':class_id', $class_id);
        $statement->execute();
        $results = $statement->fetchAll();
        $statement->closeCursor();
        return $results;
    }

    function select_vehicles_class_make_year($class_id, $make_id){
        global $db;

        $query = '
            SELECT v.ID, v.class_id, v.type_id, v.make_id, v.Year, m.Make, v.Model, t.Type, c.Class, v.Price
            from vehicles as v
            INNER JOIN types as t
                on v.type_id = t.ID
            inner join makes as m
                on v.make_id = m.ID
            INNER join classes as c
                on c.ID = v.class_id
            where make_id = :make_id and class_id = :class_id
            ORDER by v.Year DESC
        ';
        $statement = $db->prepare($query);
        $statement->bindValue(':make_id', $make_id);
        $statement->bindValue(':class_id', $class_id);
        $statement->execute();
        $results = $statement->fetchAll();
        $statement->closeCursor();
        return $results;
    }


    function select_vehicles_make_type_price($make_id, $type_id){
        global $db;

        $query = '
            SELECT v.ID, v.class_id, v.type_id, v.make_id, v.Year, m.Make, v.Model, t.Type, c.Class, v.Price
            from vehicles as v
            INNER JOIN types as t
                on v.type_id = t.ID
            inner join makes as m
                on v.make_id = m.ID
            INNER join classes as c
                on c.ID = v.class_id
            where make_id = :make_id and type_id = :type_id
            ORDER by v.Price DESC
        ';
        $statement = $db->prepare($query);
        $statement->bindValue(':make_id', $make_id);
        $statement->bindValue(':type_id', $type_id);
        $statement->execute();
        $results = $statement->fetchAll();
        $statement->closeCursor();
        return $results;
    }

    function select_vehicles_make_type_year($make_id, $type_id){
        global $db;

        $query = '
            SELECT v.ID, v.class_id, v.type_id, v.make_id, v.Year, m.Make, v.Model, t.Type, c.Class, v.Price
            from vehicles as v
            INNER JOIN types as t
                on v.type_id = t.ID
            inner join makes as m
                on v.make_id = m.ID
            INNER join classes as c
                on c.ID = v.class_id
            where make_id = :make_id and type_id = :type_id
            ORDER by v.Year DESC
        ';
        $statement = $db->prepare($query);
        $statement->bindValue(':make_id', $make_id);
        $statement->bindValue(':type_id', $type_id);
        $statement->execute();
        $results = $statement->fetchAll();
        $statement->closeCursor();
        return $results;
    }


    function select_vehicles_class_type_price($class_id, $type_id){
        global $db;

        $query = '
            SELECT v.ID, v.class_id, v.type_id, v.make_id, v.Year, m.Make, v.Model, t.Type, c.Class, v.Price
            from vehicles as v
            INNER JOIN types as t
                on v.type_id = t.ID
            inner join makes as m
                on v.make_id = m.ID
            INNER join classes as c
                on c.ID = v.class_id
            where class_id = :class_id and type_id = :type_id
            ORDER by v.Price DESC
        ';
        $statement = $db->prepare($query);
        $statement->bindValue(':class_id', $class_id);
        $statement->bindValue(':type_id', $type_id);
        $statement->execute();
        $results = $statement->fetchAll();
        $statement->closeCursor();
        return $results;
    }

    function select_vehicles_class_type_year($class_id, $type_id){
        global $db;

        $query = '
            SELECT v.ID, v.class_id, v.type_id, v.make_id, v.Year, m.Make, v.Model, t.Type, c.Class, v.Price
            from vehicles as v
            INNER JOIN types as t
                on v.type_id = t.ID
            inner join makes as m
                on v.make_id = m.ID
            INNER join classes as c
                on c.ID = v.class_id
            where class_id = :class_id and type_id = :type_id
            ORDER by v.Year DESC
        ';
        $statement = $db->prepare($query);
        $statement->bindValue(':class_id', $class_id);
        $statement->bindValue(':type_id', $type_id);
        $statement->execute();
        $results = $statement->fetchAll();
        $statement->closeCursor();
        return $results;
    }

    function select_vehicles_class_make_type_price($class_id, $make_id ,$type_id){
        global $db;

        $query = '
            SELECT v.ID, v.class_id, v.type_id, v.make_id, v.Year, m.Make, v.Model, t.Type, c.Class, v.Price
            from vehicles as v
            INNER JOIN types as t
                on v.type_id = t.ID
            inner join makes as m
                on v.make_id = m.ID
            INNER join classes as c
                on c.ID = v.class_id
            where class_id = :class_id and type_id = :type_id and make_id = :make_id
            ORDER by v.Price DESC
        ';
        $statement = $db->prepare($query);
        $statement->bindValue(':class_id', $class_id);
        $statement->bindValue(':type_id', $type_id);
        $statement->bindValue(':make_id', $make_id);
        $statement->execute();
        $results = $statement->fetchAll();
        $statement->closeCursor();
        return $results;
    }

    function select_vehicles_class_make_type_year($class_id, $make_id ,$type_id){
        global $db;

        $query = '
            SELECT v.ID, v.class_id, v.type_id, v.make_id, v.Year, m.Make, v.Model, t.Type, c.Class, v.Price
            from vehicles as v
            INNER JOIN types as t
                on v.type_id = t.ID
            inner join makes as m
                on v.make_id = m.ID
            INNER join classes as c
                on c.ID = v.class_id
            where class_id = :class_id and type_id = :type_id and make_id = :make_id
            ORDER by v.Year DESC
        ';
        $statement = $db->prepare($query);
        $statement->bindValue(':class_id', $class_id);
        $statement->bindValue(':type_id', $type_id);
        $statement->bindValue(':make_id', $make_id);
        $statement->execute();
        $results = $statement->fetchAll();
        $statement->closeCursor();
        return $results;
    }

    function add_vehicle($class_id, $make_id, $type_id, $year, $model, $price){
        global $db;
        $query = 
            'insert into vehicles (class_id, make_id, type_id, year, model, price)
            values(:class_id, :make_id, :type_id, :year, :model, :price)';
            $statement = $db->prepare($query);
            $statement->bindValue(':class_id', $class_id);
            $statement->bindValue(':type_id', $type_id);
            $statement->bindValue(':make_id', $make_id);
            $statement->bindValue(':year', $year);
            $statement->bindValue(':model', $model);
            $statement->bindValue(':price', $price);
            $statement->execute();
            $results = $statement->fetchAll();
            $statement->closeCursor();
            return $results;
    }

    function delete_vehicle($vehicle_id){
        global $db;
        $query = 
            'delete from vehicles
            where ID = :vehicle_id';
            $statement = $db->prepare($query);
            $statement->bindValue(':vehicle_id', $vehicle_id);
            $statement->execute();
            $statement->closeCursor();
    }

    function list_vehicles($class_id, $make_id, $type_id, $sort_by) {
        if($class_id && $make_id && $type_id){
            if($sort_by == 'Price'){
                $results = select_vehicles_class_make_type_price($class_id, $make_id, $type_id);
            } else {
                $results = select_vehicles_class_make_type_year($class_id, $make_id, $type_id);
            }
        }

        else if($class_id && $make_id){
            if($sort_by == 'Price'){
                $results = select_vehicles_class_make_price($class_id, $make_id);
            } else {
                $results = select_vehicles_class_make_year($class_id, $make_id);
            }
        }

        else if($class_id && $type_id){
            if($sort_by == 'Price'){
                $results = select_vehicles_class_type_price($class_id, $type_id);
            } else {
                $results = select_vehicles_class_type_year($class_id, $type_id);
            }
        }

        else if($make_id && $type_id){
            if($sort_by == 'Price'){
                $results = select_vehicles_make_type_price($make_id, $type_id);
            } else {
                $results = select_vehicles_make_type_year($make_id, $type_id);
            }
        }

        else if($make_id){
            if($sort_by == 'Price'){
                $results = select_vehicles_make_price($make_id);
            } else {
                $results = select_vehicles_make_year($make_id);
            }
        }

        else if($class_id){
            if($sort_by == 'Price'){
                $results = select_vehicles_class_price($class_id);
            } else {
                $results = select_vehicles_class_year($class_id);
            }
        }

        else if($type_id){
            if($sort_by == 'Price'){
                $results = select_vehicles_type_price($type_id);
            } else {
                $results = select_vehicles_type_year($type_id);
            }
        }
        
        else if($sort_by ==  "Price"){
            $results = select_all_vehicles_price();
        }
        else {
            $results = select_all_vehicles_year();
        }
        return $results;
    }


?>