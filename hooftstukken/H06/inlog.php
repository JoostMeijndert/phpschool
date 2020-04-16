<?php

print_r($_POST);
echo "<br><br>";

if(isset($_POST['email']) && isset($_POST['wachtwoord'])){
    $email = $_POST['email'];
    $wachtwoord = $_POST['wachtwoord'];
    $query = "SELECT * FROM login WHERE email = 'email' AND wachtwoord = 'wachtwoord'";
    /** @var TYPE_NAME $conn */
    $stmt = $conn->prepare($query) or die('Error!');
    $stmt->execute( ) or die ('Error 2');
}

echo "<br><br><br>";
try{
    $dbh = new PDO('mysql:host=localhost;dbname=school;port=3308',
        'root', '');
    foreach ($dbh->query('select * from cursist') as $row){
        print_r($row);
    }
    $dbh = null;
} catch (PDDException $e){
    print "Error!:" . $e->getMessege() . '<br/>';
}
?>