<?php
require ('model\database.php');
require ('model\player.php');
require ('model\playerDB.php');
session_start();

$action = filter_input(INPUT_POST, 'action');
if ($action === NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action === NULL) {
        $action = 'main_menu';
    }
}

switch ($action) {
    case 'main_menu':
        include('mainmenu.php');
        break;
        die;
    case 'create_player':
        if (!isset($Name)) {
            $Name = '';
        }
        
        include('register/createplayer.php');
        break;
        die;
    case 'confirm_player':
        $Name = filter_input(INPUT_POST, "Name");
        $Class = filter_input(INPUT_POST, "Class");
        $errorName = '';
        $errorClass ='';
        
        if($Name !== '')
        {
            $name_match = preg_match('/^[A-Z]/i', $Name);
            
            if ($name_match === false){
                echo 'error';
            }else if($name_match === 0){
                $errorName = $errorName . "Name must begin with a letter";
            }
            
        } else {
            $errorName = $errorName . "Please enter a name";
        }
        
        if($Class === NULL){
            $errorClass = $errorClass . "Please select a class";
        } else if ($Class === '') {
            $errorClass = $errorClass . "Please select a class";
        }
        
        
        
        if($errorName != '' || $errorClass != '')
        {
            include('register/createplayer.php');
            exit();
        }
        
        playerDB::addPlayer($Name, $Class);
                
        include('register\confirmation.php');
        die;
        break;
    case 'display_players':
        $players = playerDB::getPlayers();
        
        include('register\displayall.php');
        break;
        die;
    case 'new image':
        
        
        
        break;
        die;
    case 'uploadimage':
        $playerID = filter_input(INPUT_POST, "playerID");
        if(isset($_FILES['image'])){
            $setDefualt = true;
    
            $errorUserPageImage = '';
            
            $errors= array();
            $file_name = $_FILES['image']['name'];
            $file_size = $_FILES['image']['size'];
            $file_tmp = $_FILES['image']['tmp_name'];
            $file_type = $_FILES['image']['type'];
            $temp = $_FILES['image']['name'];
            $temp = explode('.', $temp);
            $temp = end($temp);
            $file_ext = strtolower($temp);
            
            $extensions= array("jpeg", "jpg", "png", "gif"); 
            
             $fileNameNew = uniqid('',true).".".$file_ext;
            
            if(in_array($file_ext,$extensions) === false){
                
                $errors[]="file extension not in whitelist: " . join(',',$extensions);
            }
           
            if(empty($errors)=== true){
                move_uploaded_file($file_tmp,"Image/".$fileNameNew);
                
                imageDB::addImage("Image/".$fileNameNew, $playerID );
                $imageUser = imageDB::getImagesWithUserID($playerID);
                $actualImage = $imageUser[0];
                //echo "Success";
              //echo "<img src='Image/default.png'>";
                $changeNotice = 'Image Uploaded';
              echo '<img src =Image/'.$file_name;
            }
        }
        break;
        die;
}