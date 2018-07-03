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
$Ncommande = rand(10000, 999999);
//=====Déclaration des messages au format texte et au format HTML.
$message_txt = "Salut à tous, voici un e-mail envoyé par un script PHP.";
$message_html = "
<html>
<head>
    <meta charset='UTF-8'>
</head>
<body style='max-width: 540px;width: 100%;'>
    <img src='https://encasdamour.fr/img/bandeau.png'>
    <h1 style='font-weight: bold;line-height: normal;font-size: 18px;color: #4D43B0;'>Salut ".$_POST["nom"]." </h1>
    <p style='font-size: 12px; color: #979797; width: 100%;'>Ta réservation a bien été prise en compte par le service d’Encas d’amour. <br>
On revient très vite vers toi pour te dire si tu fais partie de notre sélection de beta testeurs pour bénéficier d’une Boxpack gratuite ! </p>
<h3 style='font-weight:600;font-size:15px;color:#4D43B0;'>Récapitulation de ta réservation - <strong>N° NDR\".$Ncommande.\"</strong></h3>
<ul style='margin-left: 0;padding-left: 0;'>
    <li style='margin-left: 0;list-style: none;border-top: 1px solid #4D43B0;padding: 10px 0;width: 100%'>
        <h4 style='font-weight: 600;font-size: 11px;text-transform: uppercase;color: #4D43B0;'>Ta boxpack</h4>
        <p style='font-size: 12px; color: #979797; width: 100%;'>".$_POST["pack"]."</p>
    </li>
        <h4 style='font-weight: 600;font-size: 11px;text-transform: uppercase;color: #4D43B0;'>Tes menus</h4>
    <li style='margin-left: 0;list-style: none;border-top: 1px solid #4D43B0;padding: 10px 0;width: 100%'>
        <p style='font-size: 12px; color: #979797; width: 100%;'>".$_POST["menu"]."</p>
        <p style='font-size: 12px; color: #979797; width: 100%;'>".$_POST["menus"]."</p>
        <p style='font-size: 12px; color: #979797; width: 100%;'></p>
    </li>
        <h4 style='font-weight: 600;font-size: 11px;text-transform: uppercase;color: #4D43B0;'>La Date et l’heure de ta livraison</h4>
    <li style='margin-left: 0;list-style: none;border-top: 1px solid #4D43B0;border-bottom: 1px solid #4D43B0;padding: 10px 0;width: 100%'>
        <p style='font-size: 12px; color: #979797; width: 100%;'><span style='padding: 10px 20px;width: 40%;background: #4D43B0;border-radius: 3px;color: #fff;font-weight: 600;line-height: normal;font-size: 13px;text-align: center;margin-right: 15px;'>".$_POST["date_time"]."</span><span style='font-size: 12px; color: #979797; width: 100%;'><span style='padding: 10px 20px;width: 40%;background: #4D43B0;border-radius: 3px;color: #fff;font-weight: 600;line-height: normal;font-size: 13px;text-align: center;margin-right: 15px;'>".$_POST["heure"]."</span></p>
    </li>
</ul>
<div class='prix'>
    <div style='width: 50%;float: right;'>
        <p style='font-size: 12px; color: #979797; width: 100%;'>Prix du pack complet :<span style='float: right;'>80,00 EUR</span></p>
        <p style='font-size: 12px; color: #979797; width: 100%;'>Frais de livraison :<span style='float: right;'>4,00 EUR</span></p>
        <p style='font-size: 12px; color: #979797; width: 100%;'>Total :<span style='float: right;text-decoration:line-through;'>84,00 EUR</span></p>
        <p style='font-size: 12px; color: #979797; width: 100%;'><span style='float: right;font-size: 15px;color: #4D43B0;font-weight: 600;'>GRATUIT</span></p>
    </div>
</div>
<div style='text-align: center;clear: both'>
      <img src='https://encasdamour.fr/img/img_signature.png' alt='img_signature'>
      <p style='width: 100%;'>
        <span><a target='_blank' href='https://www.facebook.com/encasdamour'><img src='https://encasdamour.fr/img/facebook_icono.png' alt='facebook'></a></span>
        <span><a target='_blank' href='https://twitter.com/Encasdamour'><img src='https://encasdamour.fr/img/twitter_icono.png' alt='facebook'></a></span>
        <span><a target='_blank' href='https://www.instagram.com/encas_damour/'><img src='https://encasdamour.fr/img/instagral_icono.png' alt='facebook'></a></span>
      </p>  
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