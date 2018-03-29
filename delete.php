<?php
//callapi functie importeren
require_once ('scripts/call_api.php');

//beveiligen op basis van de querystring
//zit in de url dus GET method

//key bestaat en is met GET method
if($_SERVER['REQUEST_METHOD'] === 'GET' && key_exists("userID",$_GET)){
    $result=CallAPI("DELETE","http://metamorph.be/datamanagement/demo/api.php/users/".$_GET['userID']);
    print_r($result);
} else {
    echo "de link die u hebt gevolgd werkt niet meer";

    //terugsturen na 5 seconden (optioneel)
    header("refresh:5;url=index.php");
}
?>