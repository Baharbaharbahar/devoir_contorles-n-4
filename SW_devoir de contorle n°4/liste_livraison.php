<?php
$date=$_POST["date"];
$destinatatire=$_POST["destinatatire"];
$de=$_POST["de"];
$vers=$_POST["vers"];
$poids=$_POST["poids"];
$livraison=$_POST["livraison"];
$tel=$_POST["tel"];
require("config.php");
$conn=mysqli_connect($server,$username,$password,$bd) or die ("Probleme de connxion au serveur ou à la base de données");
$sql="select* from livraison ;";
$res=mysqli_query($conn,$sql);
$nb=mysqli_num_rows($res);
?>
<table border="1">
<tr>
    <th>ID</th>
    <th>Date livraison</th>
    <th>Expediteur</th>
    <th>Destinatatire</th>
    <th>Telephone du Destinatatire</th>
    <th>ville Dapart</th>
    <th>Ville Arrivees</th>
    <th>Poids</th>
    <th>Livraison Express</th>
    <th>Prix</th>
</tr>
<?php
    for($i=0;$i<$nb;$i++)
    {
        $enreg=mysqli_fetch_array($res);
    ?>
    <tr>
        <td><?php echo $enreg[0]; ?></td>
        <td><?php echo $enreg[1]; ?></td>
        <td><?php echo $enreg[2]; ?></td>
        <td><?php echo $enreg[3]; ?></td>
        <td><?php echo $enreg[4]; ?></td>
        <td><?php echo $enreg[5]; ?></td>
        <td><?php echo $enreg[6]; ?></td>
        <td><?php echo $enreg[7]; ?></td>
        <td><?php if ($enreg[8]=='O') echo 'Oui';else echo 'Non'; ?></td>
        <td><?php echo $enreg[9]; ?></td>
    </tr>

    <?php
    }
    ?>
</table>















