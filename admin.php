<!-- plik: admin.php
    autor: przem
    data: 12-09-2016
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
        <h1>Dane z bazy</h1>
        
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

$sql = "SELECT id, imie, tytul, tresc FROM tabela";
$result = $conn->query($sql);
echo "przed while <br> <br>";

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["imie"]. " tytuł: " . $row["tytul"]. "<br>";
        echo "row:".$row["id"] . "<br>";
        $id_do_skasowania=$row["id"];
        

        echo '<FORM ACTION="kasuje_row.php" METHOD="POST" accept-charset="UTF-8">';
        echo '<label for="wartosc"> skasuj przyciskiem </label>';
        echo '<INPUT TYPE="SUBMIT" NAME="wartosc" Value=';
        echo "$id_do_skasowania /> </FORM>";

    }
} else {
    echo "0 results";
}
$conn->close();

?> 
 </CENTER> 
    </body>
</html>
