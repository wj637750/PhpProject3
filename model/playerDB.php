<?php

class playerDB {
    
    public static function getPlayers()
    {
        $db = Database::getDB();
        
        $queryUsers = 'SELECT * from player';
        $statement = $db->prepare($queryUsers);
        $statement->execute();
        $players = $statement->fetchAll();
        $statement->closeCursor;
        return $players;
    }
    
    public static function addPlayer($playerName, $playerClass)
    {
        $db = Database::getDB();
        
        $query = "INSERT into player"
                . "(playerName, PlayerClass)"
                . "values (:playerName, :playerClass)";
        $statement = $db->prepare($query);
        $statement->bindValue(':playerName', $playerName);
        $statement->bindValue(':playerClass', $playerClass);
        $statement->execute();
        $statement->closeCursor();
    }
}

