<?php
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