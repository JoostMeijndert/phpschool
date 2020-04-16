<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
    </style>
</head>
<body>
<?php
//deelbaar door 3 opdracht
// als de uitkomst niets is is de boolean false en als de uitkomst 1 is is de boolean true
function deelbaarDoor3($invoer)
{
    if ($invoer % 3 == 0) {
        $invoer = true;

    } else {
        $invoer = false;
    }
    return "invoer = " . $invoer;
}

echo deelbaarDoor3(6);
?>
<br><br>
<a href="H04.php"><button type="button">Hoofdstuk 4 index</button></a>
<br><br>
<a href="../../index.php"><button type="button">index</button></a>
</body>
</html>