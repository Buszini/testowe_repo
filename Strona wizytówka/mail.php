<!DOCTYPE HTML>
<html lang="pl">
<head>
    <meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <title>Paweł Buszek- Portfolio</title>
    <meta name="description" content="Stworzę dla Ciebie stronę, której potrzebujesz!"/>
    <meta name="keywords" content="zamów, stronę, tworzenie, www, programista, portfolio, php, javascript, html, css, JavaScript"/>
    <link rel="stylesheet" href="style.css" type="text/css"/>
    <link rel="stylesheet" href="css/fontello.css" type="text/css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&family=Lato&display=swap" rel="stylesheet">
<script src="timer.js"></script>

    
    </head>
	<body onload="odliczanie();">
    <body>
    <div id="container">
        <div class="rectangle">
        <div id="logo"><a href="index.html" class="nounderline">Paweł Buszek</a></div>
        <div id="zegar">12:00:00</div>
        <div style="clear:both;"></div>
        </div>
		<div class="square">
        <div class="tile1">
        <a href="kimjestem.html" class="tilelink">
        <i class="icon-user"></i><br/>Kim jestem?</a></div>
        <div class="tile11">
        <a href="oferta.html" class="tilelink">
        <i class="icon-laptop"></i><br/>Co oferuję?</a></div>
        <div style="clear:both;"></div>
        
        <div class="tile2"><a href="cv.html" class="tilelink"><i class="icon-graduation-cap"></i><br/>Curriculum vitae</a></div>
        <div class="tile3"><a href="kontakt.html" class="tilelink"><i class="icon-envelope-open"></i><br/>Kontakt ze mną</a></div>
        <div style="clear:both;"></div>
        
       
        
        </div>
		<div class="square">
        <div class="tile5"><br/><br/><b>Jesteś zainteresowany moją ofertą?</b><br/><br/><br/>Zapraszam do kontaktu w formularzu poniżej :)<br/><br/><br/>
		Lub telefonicznie: <b>+48 732 661 587</b>
        </div>
        
        </div>
        <div style="clear:both;"></div>
      
<?php

$to      = 'pawelbuszek@gmail.com';
$name    = $_POST['name'];
$email   = $_POST['email'];
$subject = 'Nowy e-mail od ' . $name . ' (' . $email . ')';
$message = $_POST['message'];
$headers = 'From: ' . $name . ' (' . $email . ')';
$headers .= 'Content-Type: text/html; charset=utf-8';

mail($to, $subject, $message, $headers);


?>
 <form method="POST" name="contactform" action="mail.php">
        <div class="tileform">
	<div class="ramka">
<dt><label for="name">Imię</label></dt>
<dd><input type="text" class="name" required /></dd>
<dt><label for="email">E-mail</label></dt>
<dd><input type="email" class="email" required /></dd>
<dt><label for="message">Temat wiadomości</label></dt>
<dd><input type="text" class="title" required /></dd>
<dt><label for="message">Wiadomość</label></dt>
<dd><textarea name="message" required></textarea></dd>
<input type="submit" value="Wyślij" />
<input type="reset" value="Reset" />

</div>
	

		<div style="clear:both;"></div></div></form>
<div class="square1">
<div class="tile4cv"> <i>"Dobry projekt dodaje wartości szybciej niż generuje koszty." - Thomas C. Gale</i><br/></div>
 
<div class="yt"><a href="http://youtube.com" target="_blank" class="sociallink"><i class="icon-youtube"></i></a></div>
        <div class="fb"><a href="http://facebook.com" target="_blank" class="sociallink"><i class="icon-facebook-rect"></i></a></div>
        <div class="gplus"><a href="https://myaccount.google.com/profile?pli=1" target="_blank" class="sociallink"><i class="icon-googleplus-rect"></i></a></div>
        <div class="tw"><a href="https://twitter.com" target="_blank" class="sociallink"><i class="icon-twitter-bird"></i></a></div>


       </div>
        <div class="rectangle">2022 &copy; Paweł Buszek - Portfolio. Programista webowy zaprasza do współpracy! <i class="icon-envelope-open-o"></i> pawelbuszek@gmail.com<div style="clear:both;"></div>
		
    </body>
    </html>
    
