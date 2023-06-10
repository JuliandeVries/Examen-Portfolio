<?php
    $naam = $_POST['naam'];
    $email = $_POST['email'];
    $datum = $_POST['datum'];
    $tijd = $_POST['tijd'];
    $personen = $_POST['personen'];

    $conn = new mysqli('localhost','root', '', 'test');
    if ($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);   
    }else{
        $stmt = $conn->prepare("insert inton registration(naam, email, datum, tijd, personen)
            values(?, ?, ?, ?, ?)");
            $stmt->bind_param("ssssi",$naam, $email, $datum, $tijd, $personen);
            $stmt->execute();
            echo "registration succelfully...";
            $stmt->close();
            $conn->close();
    }
?>