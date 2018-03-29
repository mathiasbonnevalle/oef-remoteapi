?>

<?php
//array tonen
print_r($_POST);

//callapi functie importeren
require_once ('scripts/call_api.php');

//code om iets toe te voegen
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = array();
    //linker keys (Nr, Omschrijving...) MOETEN zelfde zijn als keys
    //bij create nooit id's meegeven

    $user['username'] = $_POST['username'];
    $user['email'] = $_POST['email'];
    $user['password'] = $_POST['password'];

    //maak van deze waarden een json string
    $result =
        CallAPI("POST", "http://metamorph.be/datamanagement/demo/api.php/users", json_encode
        ($user));
    echo '<pre>' . print_r($result, true) . '</pre>';

    //controle op numerische waarde
    if (is_numeric($result)) {
        //gebruiker doorverwijzen naar index als het geslaagd is
        header("location: index.php");
    } else {
        print_r($result);
    }
}