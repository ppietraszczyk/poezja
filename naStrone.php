<!-- plik: naStrone.php
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

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "autor: " . $row["imie"] . "<br>";
        echo $row["tytul"]. "<br><br>";
    
        $dlugosc=strlen($row["tresc"]);
        for($i=$dlugosc; $i>0; $i--){
            # wyluskuje jeden znak ze stringu
            $znak=substr($row["tresc"], $dlugosc-$i, 1);
            if ($znak!=="\n"){
                echo $znak;
            }
            else {
                echo '<br>';
            }
        }
        echo "<br><br><br>"." znaków w wierszu: ".$dlugosc."  id: ".$row["id"]."<br>";
        echo "--------------------------------"."<br><br>";
    }
} else {
    echo "0 results";
}
$conn->close();

?> 
 </CENTER> 
    </body>
</html>
