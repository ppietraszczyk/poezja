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
        </br></br><FORM ACTION='./index.html' METHOD='GET'><CENTER><INPUT TYPE='SUBMIT' NAME='submitButton' Value='Powrót do strony głównej'/></CENTER></FORM></br></br>

         <?php

$servername = "mysql.ct8.pl";
$username = "poezja";
$password = "*******";
$dbname = "poezja";

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
</br></br><FORM ACTION='./tvp.php' METHOD='GET'><CENTER><INPUT TYPE='SUBMIT' NAME='submitButton' Value='Powrót do panelu administracyjnego'/></CENTER></FORM></br></br>
