<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        body{
            text-align: center;
        }
    </style>
</head>
<body>
<?php
for($i = 0; $i<=9; $i++) {
    for($j = 0; $j<=$i; $j++) {
        echo "*";
    }
    echo "<br>";
}
?>
<br><br>
<a href="H03.php"><button type="button">Hoofdstuk 3 index</button></a>
<br><br>
<a href="../../index.php"><button type="button">index</button></a>
</body>
</html>
