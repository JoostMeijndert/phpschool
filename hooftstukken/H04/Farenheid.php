
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
//celsius naar fahrenheit function

function celsiusNaarFahrenheit($celsius)
{
    $fahrenheit = ($celsius * 1.8) + 32;

    return $celsius . " graden Celsius = " . $fahrenheit . " Fahrenheit.";
}

echo celsiusNaarFahrenheit(0);

?>
<?php
?>
<br><br>
<a href="H04.php"><button type="button">Hoofdstuk 4 index</button></a>
<br><br>
<a href="../../index.php"><button type="button">index</button></a>
</body>
</html>
