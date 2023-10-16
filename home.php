<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"> 
    <title>Home</title>
</head>
<body>
    <header>
        <div>
            <div class="logo">
                <img src="Green.jpg" width="150px"> <!--logo --> 
            </div>
            <ul>
                <li><a href="#">Home</a></li> <!--navbar --> 
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
        </div>
        <div class="titel"> <!--tekst in midden van de website --> 
            <h1>Lekker eten!</h1>
        </div>
        <div class="link"> <!--button naar reserveringspagina --> 
           <a href="reserveren.php" class="btn">Reserveer nu!</a>
        </div>
        <div class="php" style="text-align: center;"> <!--php code voor de datum --> 
            De datum van vandaag is: <b><?php echo date('d/m/Y') ?>
        </div>
    </header>
    <script> //javascript melding
        alert("Deze website maakt gebruikt van cookies.")
    </script>
</body>
</html>