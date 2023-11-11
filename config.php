<?php
// config.php
$dbHost = 'localhost';
$dbUsername = 'present'; // The username you created for your database
$dbPassword = 'root';    // The password you assigned
$dbName = 'presentDB';   // The name of your database

// Skapa en anslutning
$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Kontrollera anslutningen
if ($conn->connect_error) {
    die("Anslutning misslyckades: " . $conn->connect_error);
}
?>
