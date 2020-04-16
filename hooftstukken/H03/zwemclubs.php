
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        table, tr, td{
            border: solid black 1px;
            border-collapse: collapse;
        }

        img{
            width: 20px;
        }
    </style>
</head>
<body>

<table>
<?php

 $zwemclubs = array(
     "de Spartelkuikens" => 25,
     "de waterbuffels" => 32,
     "ponnsmderin" => 11,
     "bommetje" => 23
 );

 foreach ($zwemclubs as $clubnamen => $zwemmers){

     echo "<tr>";

     //clubnamen
     echo "<td>$clubnamen</td>";


     //zwemmers
     echo "<td>$zwemmers</td>";

     echo "<td>";
     $plaatjes = floor($zwemmers / 5);
     for($i = 0; $i < $plaatjes; $i++){
         echo '<img src="../../zwemmen/zwem.png" alt = "plaatje">';
     }
     echo "</td>";

     echo "</tr>";
 }

?>
</table>
<br><br>
<a href="H03/H03.php"><button type="button">Hoofdstuk 3 index</button></a>
<br><br>
<a href="../index.php"><button type="button">index</button></a>
</body>
</html>
