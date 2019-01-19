<?php
$naam = $voornaam = $email = $bericht = $error = ""; // Ik definieer enkele lege variabelen.
if($_SERVER['REQUEST_METHOD'] == 'POST'){ // Ik controleer of er iets verzonden is geweest.
  if(isset($_POST['naam'])){ // Ik controleer of de naam goed is doorgestuurd.
    if(!empty($_POST['naam'])){ // Ik controleer of de gebruiker wel degelijk een naam heeft opgegeven.
      $naam = $_POST['naam']; // Ik schrijf de opgegeven naam over naar de variabele naam.
    }
    else {
    $error += "Please enter a name <br>";
  }
  } else {
    $error += "Something went wrong with the details <br>";
  }

  if(isset($_POST['voornaam'])){ // Ik controleer of de voornaam goed is doorgestuurd.
    if(!empty($_POST['voornaam'])){ // Ik controleer of de gebruiker wel degelijk een voornaam heeft opgegeven.
      $voornaam = $_POST['voornaam']; // Ik schrijf de opgegeven voornaam over naar de variabele voornaam.
    }
    else {
    $error += "Please enter your name <br>";
  }
  } else {
    $error += "Something went wrong trying to submit. <br>";
  }

  if(isset($_POST['email'])){ // Ik controleer of het email-adres goed is doorgestuurd.
    if(!empty($_POST['email'])){ // Ik controleer of de gebruiker wel degelijk een email-adres heeft opgegeven.
      $email = $_POST['email']; // Ik schrijf het opgegeven email-adres over naar de variabele email.
    }
    else {
    $error += "Please enter a valid email address. <br>";
  }
  } else {
    $error += "Something went wrong trying to submit. <br>";
  }

  if(isset($_POST['bericht'])){ // Ik controleer of het bericht goed is doorgestuurd.
    if(!empty($_POST['bericht'])){ // Ik controleer of de gebruiker wel degelijk een bericht heeft opgegeven.
      $bericht = $_POST['bericht']; // Ik schrijf het opgegeven bericht over naar de variabele email.
    }
    else {
    $error += "Please enter your message <br>";
  }
  } else {
    $error += "Something went wrong trying to submit. <br>";
  }

  if(empty($error)){

  $bericht = "Following person, <br><br> $naam $voornaam, has sent you the message... <br><br> <b>Bericht:</b> <br> $bericht <br><br> You can contact this person by using the email: $email";
  $ontvanger = "Sinthaesia@gmail.com"; //Geef hier het e-mailadres van de ontvanger op.
  $onderwerp = "Playerbase - Contact form";
  $headers = "From: info@playerbase.sinthaesia.com" . "\r\n"; //Geef hier je eigen e-mailadres op dat waaruit de mail verzonden moet worden.
  $headers .= "Reply-To: info@playerbase.sinthaesia.com" . "\r\n"; //Geef hier je eigen e-mailadres op.
  $headers .= "CC: \r\n";
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

  mail($ontvanger, $onderwerp, $bericht, $headers) or die ("The mail failed to send."); //Hier wordt de mail verzonden.
  echo "Your message has been submitted succesfully!";
  } else {
  echo $error;
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact - Playerbase</title>
  <link rel="icon" href="images/favicon.png" type="image/x-icon" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="slicklib/slick.css"/>
  <link rel="stylesheet" type="text/css" href="slicklib/slick-theme.css"/>
  <link rel="stylesheet" type="text/css" title="screen" href="stylesheets/screen.css">
  <link rel="stylesheet" type="text/css" href="stylesheets/navigation_test.css">
  <link rel="stylesheet" type="text/css" href="stylesheets/hamburger.css">
  <link rel="stylesheet" type="text/css" href="stylesheets/grid-gallery.css">
  <link rel="stylesheet" type="text/css" href="stylesheets/contact.css">
</head>
<body>
  <header id="desktop-icons">
    <nav id="icons">
      <ul>
      <div class="logo">
        <h1><i class="fas fa-users"></i> Playerbase</h1>
        <p>For Gamers, By Gamers</p>
      </div>
        <li>
          <a href="index.html">
            <div class="icon">
              <i class="fas fa-home"></i>
              <i class="fas fa-home"></i>
            </div>
            <div class="name"><span data-text="Home">Home</span></div>
          </a>
        </li>
        <li>
          <a href="sims-4.html">
            <div class="icon">
              <i class="fas fa-fire"></i>
              <i class="fas fa-fire"></i>
            </div>
            <div class="name"><span data-text="Best rated">Best rated</span></div>
          </a>
        </li>
        <li>
          <a href="affiliates.html">
            <div class="icon">
              <i class="fas fa-smile-wink"></i>
              <i class="fas fa-smile-wink"></i>
            </div>
            <div class="name"><span data-text="Affiliates">Affiliates</span></div>
          </a>
        </li>
        <li>
          <a href="contact.php">
            <div class="icon">
              <i class="fas fa-envelope"></i>
              <i class="fas fa-envelope"></i>
            </div>
            <div class="name"><span data-text="Contact">Contact</span></div>
          </a>
        </li>
      </ul>
    </nav>
  </header>
  <header id="icon-header">
    <a class="logo" href="index.html"><i class="fas fa-users"></i> PlayerBase</a>
    <nav>
      <ul>
        <li>
          <a href="index.html">
            <i class="fas fa-home"></i>
            <h1>Home</h1>
          </a>
        </li>
        <li>
          <a href="sims-4.html">
            <i class="fas fa-fire"></i>
            <h1>Best rated</h1>
          </a>
        </li>
        <li>
          <a href="affiliates.html">
            <i class="fas fa-smile-wink"></i>
            <h1>Affiliates</h1>
          </a>
        </li>
        <li>
          <a href="contact.php">
            <i class="fas fa-envelope"></i>
            <h1>Contact</h1>
          </a>
        </li>
      </ul>
    </nav>
    <button class="hamburger hamburger--arrow" tabindex="0" aria-controls="nav" type="button">
      <span class="hamburger-box">
        <span class="hamburger-inner"></span>
      </span>
    </button>
  </header>
<div class="container-contact">
  <form action="contact.php" method="POST" class="wido-contact">
		<table>
			<tr>
        <tr>
  				<td>First name:</td>
  				<td><input type="text" placeholder="John" name="voornaam"></td>
  			</tr>
      <tr>
				<td>Last name:</td>
				<td><input type="text" placeholder="Doe" name="naam"></td>
			</tr>
			<tr>
				<td>E-mail:</td>
				<td><input cols="40" rows="10" type="email" placeholder="Johndoe@gmail.com" name="email"></td>
			</tr>
			<tr>
				<td>Message</td>
				<td><textarea cols="40" rows="10" name="bericht"></textarea></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" style="float: right;" value="Send!"></td>
			</tr>
		</table>
	</form>
</div>
<div class="map-container">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2519.048724865204!2d4.725684315745869!3d50.84878197953228!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c161216d631843%3A0x6fd1747004215984!2sCVO+VOLT+-+campus+Heverlee!5e0!3m2!1sen!2sbe!4v1547843399814" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
  <footer class="page-footer">
    <div class="footer-flex-first">
      <h1>Quick navigation</h1>
      <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="sims-4.html">Best rated</a></li>
        <li><a href="affiliates.html">Affiliates</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
    </div>
    <div class="footer-flex-second">
      <h1>Social media</h1>
      <ul>
        <li>
          <a href="https://www.facebook.com/AbsolutelyIrrelevantPodcast/"><i class="fab fa-facebook-f"></i></a>
        </li>
        <li>
          <a href="https://www.instagram.com/explore/tags/absolutelyirrelevant/?hl=en"><i class="fab fa-instagram"></i></a>
        </li>
      </ul>
    </div>
  </footer>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"
  			integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E="
  			crossorigin="anonymous"></script>
<script src="scripts/navigation.js" type="text/javascript"></script>
<script type="text/javascript" src="slicklib/slick.js"></script>
<script src="scripts/scripts.js" type="text/javascript"></script>
</body>
</html>
