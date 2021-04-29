<?php

class Player {
    
    private $playerID, $playerName, $playerClass, $playerScore;
    
    public function __construct($playerName, $playerClass, $playerScore) {
        $this->playerName = $playerName;
        $this->playerClass = $playerClass;
        $this->playerScore = $playerScore;
    }
    
    public function getPlayerID() {
        return $this->playerID;
    }
    
    public function getPlayerName() {
        return $this->playerName;
    }
    
    public function getPlayerClass() {
        return $this->playerClass;
    }
    
    public function getPlayerScore() {
        return $this->playerScore;
    }
    
    public function setPlayerID() {
        $this->playerID = $playerID;
    }
    
    public function setPlayerName() {
        $this->playerName = $playerName;
    }
    
    public function setPlayerClass() {
        $this->playerClass = $playerClass;
    }
    
    public function setPlayerScore() {
        $this->playerScore = $playerScore;
    }
} 

