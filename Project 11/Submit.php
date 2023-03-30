<?php
include 'Keukenprinses.php';

if(isset($_POST['submit']))
{
$voornaam = $_POST['voornaam'];
$tussenvoegsels = $_POST['tussenvoegsels'];
$achternaam = $_POST['achternaam'];
$geboortedatum = $_POST['geboortedatum'];
$postcode = $_POST['postcode'];

$stmt = $dbVerbinding->prepare("INSERT INTO gebruiker (voornaam,tussenvoegsel,achternaam,geboortedatum,postcode)
VALUES ('$voornaam','$tussenvoegsels','$achternaam','$geboortedatum','$postcode')");

if (!$stmt->execute()) {
     echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
}
else{
	echo "New record created successfully";
}
$stmt->close();
$dbVerbinding->close();
}
?>
<html>
<input type ="button" value="terug naar menu" onClick="window.location.href='extensie.html';">
</html>

