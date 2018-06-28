<?php
/////////////////////////////////////////////////
// Insert commande
/////////////////////////////////////////////////
try{
    $pdo = new PDO('mysql:dbname=duprec_encasdamour;host:localhost:3306;charset=utf8','root','');
    $pdo->exec('SET NAMES utf8');
} catch( PDOException $e){
    die("Erreur! ".$e->getMessage());
}

$sql = "INSERT INTO
 commande1 (pack, menu1, menu2, date_time, heure, adresse, nom, email, telephone)
        VALUES ('".$_POST["pack"]."','".$_POST["menu"]."','".$_POST["menus"]."','".$_POST["date_time"]."','".$_POST["heure"]."','".$_POST["adresse"]."','".$_POST["nom"]."','".$_POST["email"]."','".$_POST["phone"]."')";

$stmt = $pdo->prepare($sql);
$stmt->execute();

/////////////////////////////////////////////////
// Envois du mail de récap
/////////////////////////////////////////////////

$mail = $_POST["email"]; // Déclaration de l'adresse de destination.
if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $mail)) // On filtre les serveurs qui rencontrent des bogues.
{
    $passage_ligne = "\r\n";
}
else
{
    $passage_ligne = "\n";
}
//=====Déclaration des messages au format texte et au format HTML.
$message_txt = "Salut à tous, voici un e-mail envoyé par un script PHP.";
$message_html = "
<html>
    <head></head>
    <body>
    <h1>Bonjour ".$_POST["nom"]." !</h1>
    <p>Ta réservation a bien été pris en compte par le service Encas d’amour. <br>
On revient très vite vers toi pour te dire si tu fais partie de notre sélection de beta testeurs pour bénéficier d’un dîner gratuit. ! </p>
<br>
<h2>Récapitulation de la réservation </h2>
<p>".$_POST["nom"].",<br>".$_POST["pack"]."<br>".$_POST["menu"]."<br>".$_POST["date_time"]."<br>".$_POST["heure"]." </p>
<br>
<p>Nous restons à ta disposition par e-mail si tu souhaite communiquer avec nous. [Nous contacter]</p>
<br>
<p>Bien à toi et à  l’amour  </p>
<p>Signature : L’équipe d’amour.</p>
    </body>
</html>";

//==========

//=====Création de la boundary
$boundary = "-----=".md5(rand());
//==========

//=====Définition du sujet.
$sujet = "Confirmation réservation";
//=========

//=====Création du header de l'e-mail.
$header = "From: \"Encas d'amour\"<encasdamour@gmail.com>".$passage_ligne;
$header.= "Reply-to: \"Encas d'amour\" <encasdamour@gmail.com>".$passage_ligne;
$header.= "MIME-Version: 1.0".$passage_ligne;
$header.= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;
//==========

//=====Création du message.
$message = $passage_ligne."--".$boundary.$passage_ligne;
//=====Ajout du message au format texte.
$message.= "Content-Type: text/plain; charset=\"ISO-8859-1\"".$passage_ligne;
$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
$message.= $passage_ligne.$message_txt.$passage_ligne;
//==========
$message.= $passage_ligne."--".$boundary.$passage_ligne;
//=====Ajout du message au format HTML
$message.= "Content-Type: text/html; charset=\"ISO-8859-1\"".$passage_ligne;
$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
$message.= $passage_ligne.$message_html.$passage_ligne;
//==========
$message.= $passage_ligne."--".$boundary."--".$passage_ligne;
$message.= $passage_ligne."--".$boundary."--".$passage_ligne;
//==========

//=====Envoi de l'e-mail.
mail($mail,$sujet,$message,$header);
//==========


//
header('Location: /remerciement.php');