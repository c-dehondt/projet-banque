<?php
require_once '../model/connexion_sql.php';
require '../model/managerCompte.php';
require_once '../service/chargerClass.php';
spl_autoload_register('chargerClasse');

// add an account
$manager= new managerCompte($bdd);
// create a random account number
$number = '0123456789';
$letter = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

$numeroDeCompte = '';
for ($i = 0; $i < 10; $i++) {
    $numeroDeCompte .= $number[rand(0, strlen($number))];
}
$numeroDeCompte .= $letter[rand(0, strlen($letter))];
$_POST['numeroDeCompte']= $numeroDeCompte;
$addCompte = new compte ($_POST);


$manager -> addCompte($addCompte);
header("location:home.php");
require '../view/home.php';
