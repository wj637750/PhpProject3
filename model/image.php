<?php

class Image {
    
    private $imageID, $filePath, $playerID;
    
    public function __construct($filepath, $playerID) {
        $this->filePath = $filepath;
        $this ->playerId = $playerID;
    }
    
    public function getImageId(){
        return $this->imageId;
    }
    
    public function getFilePath(){
        return $this->filePath;
    }
    
    public function getPlayerId(){
        return $this->playerId;
    }
    
    public function setImageId(){
        $this->imageId = $imageId;
    }
    
    public function setFilePath(){
        $this->filePath = $filePath;
    }
    
    public function setPlayerId(){
        $this->playerId = $playerID;
    }
}

?>