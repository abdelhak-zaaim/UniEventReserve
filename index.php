<?php
require_once "controllers/ReservationController.php";
try {
    $action = isset($_POST['action']) ? $_POST['action'] : 'index';
}catch (Exception $e){

}



