<?php
$server = "localhost";
$gebruiker = "root";
$wachtwoord = "j4mbo23";
$databasenaam = "keukenprins";

$dbVerbinding = new mysqli($server,$gebruiker,$wachtwoord,$databasenaam);
if ($dbVerbinding -> connect_errno) {
  echo "Failed to connect to MySQL: " . $dbVerbinding -> connect_error;
  exit();
}
else {
  echo "De opgeslagen gebruikers:";
}
echo "<br>";
echo "<br>";
echo "<br>";

$sql = "SELECT voornaam, tussenvoegsel, achternaam, geboortedatum, postcode FROM gebruiker";
$result = $dbVerbinding->query($sql);

if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo "voornaam: " . $row["voornaam"]. "- tussenvoegsel: " . $row["tussenvoegsel"]. "- achternaam: " . $row["achternaam"].
        "- geboortedatum: " . $row["geboortedatum"]. "- postcode: " . $row["postcode"]. "<br>";
    }
} else{
    echo "geen resultaat gevonden <br>";
}
$dbVerbinding->close();
?>

<html>
    <br>
<input type ="button" value="terug naar menu" onClick="window.location.href='extensie.html';">
</html>
