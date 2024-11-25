<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "wedkowanie";
// 

    $imie = $_POST['first_name'];
    $nazwisko = $_POST['last_name'];
    $adres = $_POST['address'];

    $conn = mysqli_connect($host, $username, $password, $dbname );


    $zapytanie = 'INSERT INTO karty_wedkarskie (imie, nazwisko, adres, data_zezwolenia, punkty) VALUES ("'.$imie.'", "'.$nazwisko.'", "'.$adres.'", NULL, NULL)';
    //pobranie dantych z formulasza
    mysqli_query($conn, $zapytanie);
    echo "its done. You can play fortnite now "; 

    mysqli_close($conn);
    

?>