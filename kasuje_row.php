<!-- plik: admin.php
    autor: przem
    data: 13-09-2016
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="Content-Language" content="pl">
        <title>Kącik poezji</title>
    </head>
    <body>
        <CENTER>
        <h1>kasuje wiersz</h1>
        
         <?php

$servername = "mysql.ct8.pl";
$username = "nazwa_użytkownika_bazy";
$password = "haslo bazy danych";
$dbname = "nazwa_bazy_danych;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id_wiersza=$_POST['wartosc'];
echo "to: ";
echo "{$id_wiersza}"."<br>";
#$id_wiersza=1;
// sql to delete a record
$sql = "DELETE FROM tabela WHERE id='$id_wiersza'";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?> 
