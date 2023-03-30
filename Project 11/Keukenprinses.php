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
  echo "De verbinding is succesvol";
}
?>


