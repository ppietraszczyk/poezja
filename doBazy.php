<!-- plik: doBazy.php
    autor: przem
    data: 13-09-2016
-->
<!DOCTYPE html>
<html>
    <head lang="pl">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="Content-Language" content="pl">
        <title>Hymny Pochwalne</title>
    </head>
    <body>
        <CENTER>
        
        <h1>Do Bazy</h1>
        <br>
        </br></br><FORM ACTION='./index.html' METHOD='GET'><CENTER><INPUT TYPE='SUBMIT' NAME='submitButton' Value='Powrót do strony głównej'/></CENTER></FORM></br></br>

        <?php

        $tytul_wiersza= $_POST['tytul'];
        $tresc_wiersza= $_POST['wiersz'];
        $imie_autora= $_POST['imie'];
        #$email_autora= $_POST['email'];
        $email_autora= "przem@hel";

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
        #$sql = "INSERT INTO tabela (imie, email)
        #VALUES ('$imie_autora', '$email_autora')";
        $sql = "INSERT INTO tabela (imie, email, tytul, tresc)
        VALUES ('$imie_autora', '$email_autora', '$tytul_wiersza', '$tresc_wiersza')";
        
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
        ?>
        </br></br><FORM ACTION='./index.html' METHOD='GET'><CENTER><INPUT TYPE='SUBMIT' NAME='submitButton' Value='Powrót do strony głównej'/></CENTER></FORM></br></br>
        </CENTER>  
    </body>
</html>
