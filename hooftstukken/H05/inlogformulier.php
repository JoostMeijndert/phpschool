<?php
//print_r($_POST);
//
//$inloggegevens = [
//    'piet@worldonline.nl'  => 'doetje123',
//    'klaas@carpets.nl' => 'snoepje777',
//    'truushendriks@wegweg.nl' => 'arkiearkie201'
//];
//
//foreach ($inloggegevens as $inlog => $wachtwoord){
//};
//

$email = $_POST['email'];
$password = $_POST['wachtwoord'];

$emailArray = array("piet@worldonline.nl" => "doetje123", "klaas@carpets.nl" => "snoepje777", "truusgendriks@wegweg.nl" => "arkiearkie201");

echo loginValid($email, $password) ? 'Welkom' : 'Je hebt geen toegang.';

function loginValid($user_email, $user_wachtwoord)
{
    global $emailArray;
    foreach ($emailArray as $email => $password) {
        if ($email == $user_email && $password == $user_wachtwoord) {
            return true;
        }
    }
    return false;
}