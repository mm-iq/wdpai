<?php

require_once 'Repository.php'

class UserRepository extends Repository {

    public function getUsers(): ?array
    {

        $this->database->connect()->prepare(

            "
            SELECT * FROM users;
            "
        );
        
        $query->execute();

        $users = $query->fetchAll(PDO::);
    }
}