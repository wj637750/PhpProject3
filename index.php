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
}