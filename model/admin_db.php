<?php 
    function add_admin($username, $password){
        global $db;
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $query = 'insert into administrators (username, password)
                    values (:username, :password)';
        $statement = $db->prepare($query);
        $statement->bindValue(':username',$username);
        $statement->bindValue(':password', $password);
        $statement->execute();
        $statement->closeCursor();
    }

    function is_valid_admin_login($username, $password){
        global $db;
        $query = 'select password from administrators
                    where username = :username';
        $statement = $db->prepare($query);
        $statement->bindValue(':username',$username);
        $statement->execute();
        $row = $statement->fetch();
        $statement->closeCursor();
        $hash = (!empty($row['password'])) ? $row['password'] : null ;
        return password_verify($password, $hash);

    }

    function username_exists($username){
        global $db;
        $query = 'select count(*) from administrators
                    where username = :username';
        $statement = $db->prepare($query);
        $statement->bindValue(':username',$username);
        $statement->execute();
        $rowCount = $statement->fetch();
        $statement->closeCursor();
        if ($rowCount == 0){
            return false;
        }else {
            return true;
        }
            

    }