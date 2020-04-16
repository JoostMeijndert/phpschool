<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
$kappersagenda = [
    "9:15" => "Mevr. Pietersen",
    "9:30" => "Mevr. Willemsen",
    "9:45" => "",
    "10:00" => "Paul van den Broek",
    "10:15" => "Karel de Meeuw",
    "10:30" => ""
    ];

echo "Deze tijden zijn mog bechikbaar:";

echo "<ul>";

foreach($kappersagenda as $tijd => $afspraak) {
        if($afspraak == "") {
            print("<li>".$tijd."</li>") ;
        }
}

?>
</ul>
<br><br>
<a href="H03.php"><button type="button">Hoofdstuk 3 index</button></a>
<br><br>
<a href="../../index.php"><button type="button">index</button></a>
</body>
</html>