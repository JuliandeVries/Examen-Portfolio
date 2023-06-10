<?php
    $naam = $_POST['naam'];
    $email = $_POST['email'];
    $datum = $_POST['datum'];
    $tijd = $_POST['tijd'];
    $personen = $_POST['personen'];

    $conn = new mysqli('localhost', 'root', 'password', 'test');
    if($conn->connect_error){
        die('Connnection Failed : '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into registration(naam, email, datum, tijd, personen)
        values(?, ?, ?, ?, ?)")
        $stmt->bind_param("sssii",$naam, $email, $datum, $tijd, $personen);
        $stmt->execute();
        echo "registration Succesfully"
        $stmt->close();
        $conn->close();
    }
?>