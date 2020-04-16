
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table, tr, td{
            border: solid black 1px;
            border-collapse: collapse;
        }

    </style>
</head>

<body>
<table>
<?php

echo "<tr>";

try{
    $dbh = new PDO('mysql:host=localhost;dbname=school;port=3308',
        'root', '');
    foreach ($dbh->query('select * from cursus') as $row){
        echo "<td>";
        print_r($row);
        echo "<td>";
    }
    $dbh = null;
} catch (PDDException $e){
    print "Error!:" . $e->getMessege() . '<br/>';
}

echo "<tr>";
?>
</table>
<br>
<a href="H06.php"><button type="button">Hooftstuk 6 index</button></a>
</body>
</html>
