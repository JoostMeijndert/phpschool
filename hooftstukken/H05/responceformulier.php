<?php

if($_POST['inlognaam'] == "") {
    echo "U moet nog een inlognaam invullen";
    echo '<br><a href="formulier.html"><button type="button">formulier</button></a>';
}

if($_POST['adres'] == "") {
    echo "U moet nog een adres invullen";
    echo '<br><a href="formulier.html"><button type="button">formulier</button></a>';
}

if($_POST['e-mail'] == "") {
    echo "U moet nog een e-mail invullen";
    echo '<br><a href="formulier.html"><button type="button">formulier</button></a>';
}

if($_POST['wachtwoord'] == "") {
    echo "U moet nog een wachtwoord invullen";
    echo '<br><a href="formulier.html"><button type="button">formulier</button></a>';
}