<?php

class imageDB {
    
    public static function getImages()
    {
        $db = Database::getDB();
        
        $queryImages = 'SELECT * FROM images';
        $statement = $db->prepare($queryImages);
        $statement->execute();
        $images = $statement->fetchAll();
        $statement->closeCursor();
        return $images;
    }
    
    public static function addImage($filePath, $playerID)
    {
        $db = Database::getDB();
        
        $query = "insert into images"
                . "(filePath, playerID"
                . "values (:filePath, :playerID";
        $statement = $db->prepare($query);
        $statement->bindValue(':filePath', $filePath);
        $statement->bindValue(':playerID', $playerID);
        $statement->execute();
        $statement->closeCursor();
    }
    
    public static function getImagesWithUserID($playerID)
    {
    $db = Database::getDB();
    
    $query = 'SELECT filePath FROM images JOIN player on images.playerID = player.playerID WHERE player.playerID = :playerID ORDER BY filepath DESC ';
    $statement = $db->prepare($query);
    $statement->bindValue(':playerID', $playerID);
    $statement->execute();
    $imagePlayer = $statement->fetchAll();
    $statement->closeCursor();
    return $imagePlayer;
    
    
    }
}

