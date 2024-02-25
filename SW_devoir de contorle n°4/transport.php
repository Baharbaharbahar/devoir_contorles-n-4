<!DOCTYPE html>
<html lang="en">
<head>
    <script src="controles.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <label for="">Date :</label>
    <input type="date" name="date" id="date"> <br><br>
    <label for="">Expediteur :</label>
    <input type="text" name="expediteur" id="expediteur">
    <label for="">Destinatatire ;</label>
    <input type="text" name="destinatatire" id="destinatatire"> <br> <br>
    
<?php
require("config.php");
$conn=mysqli_connect($server,$username,$password,$bd)or die("erreur");
$sql="select libelle from ville ;";
$res=mysqli_query($conn,$sql);
    $ligne=mysqli_fetch_array($res);
    ?>
    <label for="">De</label>
    <select name="de" id="de">
        <option value="<?php echo $ligne['libelle']?>"><?php echo $ligne['libelle']?></option>
    </select>
    <label for=""> vers </label>
    <select name="vers" id="vers">
        <option value="<?php echo $ligne[0]?>"><?php echo $ligne[0]?></option>
    </select> <br><br>
    <label for="">Poids du colis</label>
    <input type="number" name="poids" id="poids"> 
    <label for=""> Livraison Express:</label>
    <input type="checkbox" name="livraison" id="livraison"> <br>
    <label for="">telphonne du destinaitaire:</label>
    <input type="tel" name="tel" id="tel"> <br> <br>
    <input type="submit" value="Ajouter" onclick="test()" >
</body>
</html>
