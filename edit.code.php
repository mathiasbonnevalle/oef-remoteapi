<?php
date_default_timezone_set('Europe/Brussels');
error_reporting(E_ALL);
ini_set('display_errors', 'On');

//array tonen
print_r($_POST);

//callapi functie importeren
require_once ('scripts/call_api.php');

//code om iets toe te voegen
if ($_SERVER['REQUEST_METHOD'] === 'GET' && key_exists("userID",$_GET)) {
    $user = array();
    //linker keys (Nr, Omschrijving...) MOETEN zelfde zijn als keys
    //bij create nooit id's meegeven

    $user['username'] = $_POST['username'];
    $user['email'] = $_POST['email'];
    $user['password'] = $_POST['password'];

    //maak van deze waarden een json string
    $result =
        CallAPI("PATCH", "http://metamorph.be/datamanagement/demo/api.php/users/".$_GET['userID']);
    echo '<pre>' . print_r($result, true) . '</pre>';

    //controle op numerische waarde
    if (is_numeric($result)) {
        //gebruiker doorverwijzen naar index als het geslaagd is
        header("location: index.php");
    } else {
        print_r($result);
        echo "Didn't work";
    }
}

?>