<?php
/////////////////////////////////////////////////
// Insert commande
/////////////////////////////////////////////////
try{
    $pdo = new PDO('mysql:dbname=duprec_encasdamour;host:localhost:3306;charset=utf8','duprec_colin','dromar971');
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
<head>
    <meta charset=\"UTF-8\">
</head>
<body>
    <img src='Group.png'>
    <h1>Salut ".$_POST["nom"]." !</h1>
    <p>Ta réservation a bien été prise en compte par le service d’Encas d’amour. <br>
On revient très vite vers toi pour te dire si tu fais partie de notre sélection de beta testeurs pour bénéficier d’une Boxpack gratuite ! </p>
<h3>Récapitulation de ta réservation - <strong>N° NDR3498</strong></h3>
<ul>
    <li>
        <h4>Ta boxpack</h4>
        <p></p>
    </li>
        <h4>tes menus</h4>
    <li>
        <p>".$_POST["menu"]."</p>
        <p>".$_POST["menus"]."</p>
        <p></p>
    </li>
        <h4>La Date et l’heure de ta livraison</h4>
    <li>
        <p>".$_POST["date_time"]."<span>".$_POST["heure"]."</span></p>
    </li>
</ul>
<div class='prix'>
    <div>
        <p>Prix du pack complet :<span>80,00 EUR</span></p>
        <p>Frais de livraison :<span>4,00 EUR</span></p>
        <p>Total :<span class='rayer'>84,00 EUR</span></p>
        <p><span>GRATUIT</span></p>
    </div>
</div>
<div>
    <h2>Bien à toi et à  l’amour  !</h2>
      <h3>L’équipe Encas d’amour</h3>
      <img src='/' alt='/'>
      <ul>
                <li><a target='_blank' href='https://www.facebook.com/encasdamour'><i class='fab fa-facebook-f'></i></a></li>
                <li><a target='_blank' href='https://twitter.com/Encasdamour'><i class='fab fa-twitter'></i></a></li>
                <li><a target='_blank' href='https://www.instagram.com/encas_damour/'><i class='fab fa-instagram'></i></a></li>
      </ul>  
</div>
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