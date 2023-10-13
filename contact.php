<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"> 
    <title>Contact</title>
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
                <li><a href="#">Contact</a></li>
            </ul>
            <div class="titel"> <!--tekst midden van het scherm --> 
                <h2>Locatie: Valley Amsterdam, 26ste verdieping.</h2>
                <h2>Entree via Molteni store.</h2>
                <h2>Beethovenstraat 305 1083 HK, Amsterdam</h2>
                <hr>
                <h2>Telefoon: 06-12345678</h2>
                <hr>
                <h2>Email: info@gastrobargreen.nl</h2>
            </div>
        </div>
            <div class="php" style="text-align: center;"> <!--php code voor de datum --> 
                De datum van vandaag is: <b><?php echo date('d/m/Y') ?>
            </div>
    </header>
</body>
</html>