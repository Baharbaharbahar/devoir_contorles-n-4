<?php
$date=$_POST["date"];
$destinatatire=$_POST["destinatatire"];
$de=$_POST["de"];
$vers=$_POST["vers"];
$poids=$_POST["poids"];
$livraison=$_POST["livraison"];
$tel=$_POST["tel"];
$poids=$_POST['poids'];
$livraison = $_POST["livraison"];
require("config.php");
$conn = mysqli_connect($server, $username, $password, $bd) or die("Probleme de connxion au serveur ou à la base de données");
$sql = "select * from livraison ; ";
$res = mysqli_query($conn,$sql);
$nb=mysqli_num_rows($res);
echo $nb;
if ($poids < 1) {
    $prix = 8;
} else if ($poids > 1) {
    $prix =$prix +($prix*0.001);
} else if (isset($vers)){
    $prix=$prix*1.5;
} else {
    $sql1 = "insert into livrison values ('$date','$expediteur','$destinatatire','$de','$vers','$poids','$livraison','$tel','$prix');";
    $res1 = mysqli_query($conn, $sql1);
    if (mysqli_affected_rows($conn) > 0) {
        echo "livraison enregistree avec succes";
    }
}
