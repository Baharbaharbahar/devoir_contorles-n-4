<?php
$poids = $_POST["poids"];
$livraison = $_POST["livraison"];
require("config.php");
$conn = mysqli_connect($server, $username, $password, $bd) or die("Probleme de connxion au serveur ou à la base de données");
$sql = "select distance from distance ;";

echo $sql;
 $res = mysqli_query($conn, $sql);
 if ($poids < 1) {
     $poids = 8;
 } else if ($poids >= 1) {
     $poids = 0.001;
 } else if (!isset($_POST["livraison"])) {
     $livraison = "Oui";
 } else {
     $sql1 = "insert into distance values ('$date','$expediteur','$destinatatire','$de','$vers','$poids','$livraison','$tel');";
     $res1 = mysqli_query($conn, $sql1);
    if (mysqli_affected_rows($conn) > 0) {
        echo "livraison enregistree avec succes";
     }
 }
