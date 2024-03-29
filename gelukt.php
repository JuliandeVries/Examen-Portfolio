<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"> 
    <title>Reservering gelukt</title>
</head>
<body>
    <header>
        <div>
            <div class="logo">
                <img src="Green.jpg" width="150px"> <!--logo --> 
            </div>
            <ul>
                <li><a href="home.php">Home</a></li> <!--navbar --> 
                <div class="dropdown">
                    <button class="dropbtn">Menukaarten</button>
                    <div class="dropdown-content">
                        <a href="menu.pdf">Menu</a>
                        <a href="wijn.pdf">Wijn</a>
                        <a href="bar.pdf">Bar</a> 
                    </div>
                </div>
                <li><a href="reserveren.php">Reserveren</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
            <div class="titel"> <!--tekst midden van het scherm --> 
                <?php 
                    echo "De reservering is op de naam: ".$_POST["naam"];
                    echo "<br>";
                    echo "De reservering is gemaakt met dit e-mailadres: ".$_POST["email"]; 
                    echo "<br>";
                    echo "De reservering staat op deze datum: ".$_POST["datum"]; 
                    echo "<br>";
                    echo "De reservering staat op deze tijd: ".$_POST["tijd"]; 
                ?>
            </div>
        </div>
            <div class="php" style="text-align: center;"> <!--php code voor de datum --> 
                De datum van vandaag is: <b><?php echo date('d/m/Y') ?>
            </div>    
    </header>

</body>
</html>