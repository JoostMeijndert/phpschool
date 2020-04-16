<?php

//print_r($_POST);

foreach ($_POST['apen'] as $aap){
    echo "<img  src='../../recources/aap/" .$aap. ".jpg'>";
}