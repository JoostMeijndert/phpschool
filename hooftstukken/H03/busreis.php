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
$leeftijd = 10;
$bedrag = 10;

if($leeftijd > 65){
    $bedrag = $bedrag*0.5;
}

if($leeftijd <= 12){
    $bedrag = $bedrag * 0.5;
}

if($leeftijd < 3){
    $bedrag = 0;
}

echo $bedrag;
?>
<br><br>
<a href="H03.php"><button type="button">Hoofdstuk 3 index</button></a>
<br><br>
<a href="../../index.php"><button type="button">index</button></a>
</body>
</html>