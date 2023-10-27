<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"> 
    <title>Reserveren</title>
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
                <li><a href="#">Reserveren</a></li>
                <li><a href="contact.php">Contact</a>
            </ul>
            <div class="titel"> <!--tekst in het midden van het scherm --> 
                <h2>Scroll naar beneden om een reservering te maken!</h2>
            </div>
        </div>
            <div class="php" style="text-align: center;"> <!--php code voor de datum --> 
                De datum van vandaag is: <b><?php echo date('d/m/Y') ?>
            </div>
    </header>
    <div class="container"> <!--plek om je reservering te maken --> 
        <div class="container-time">
            <h2 class="heading">Openingstijden</h2>
            <h3 class="heading-days">Maandag-Vrijdag</h3>
            <p>12:00-21:00 (lunch/diner)</p>

            <h3 class="heading-days">Zaterdag & Zondag</h3>
            <p>12:00-22:30 (lunch/diner)</p>
            <hr>
            <h4 class="heading-phone">Bel ons op: 06-12345678</h4>
        </div>
        <form class="container-form" action="gelukt.php" method="post">
            <form action="#">
                <h2 class="heading">Reserveren</h2>

                <div class="form-field">
                    <p>Naam</p>
                    <input type="text" placeholder="Naam" name="naam" required> <!--naam van reservering --> 
                </div>
                <div class="form-field">
                    <p>Email</p>
                    <input type="text" placeholder="Email" name="email" required> <!--email van de reservering --> 
                </div>
                <div class="form-field">
                    <p>Datum</p>
                    <input type="date" name="datum" required> <!--datum van de reservering --> 
                </div>
                <div class="form-field">
                    <p>Tijd</p>
                    <input type="time" name="tijd" required> <!--tijd van de reservering --> 
                </div>
                <div class="form-field">
                    <p>Hoeveel personen?</p>
                    <select name="select" id="#" name="personen"> <!--aantal personen van de reservering --> 
                        <option value="1">1 Persoon</option>
                        <option value="2">2 Personen</option>
                        <option value="3">3 Personen</option>
                        <option value="4">4 Personen</option>
                        <option value="5">5 Personen</option>
                        <option value="5">6 Personen</option>
                        <option value="5">7 Personen</option>
                        <option value="5">8 Personen</option>
                    </select>
                </div>
                    <button class="button" formaction="gelukt.php">Reserveren</button> <!--button om je reservering compleet te maken --> 
            </form>
        </form>
    </div>
</body>
</html>