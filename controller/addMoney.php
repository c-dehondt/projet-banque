<?php
require_once '../model/connexion_sql.php';
require '../model/managerCompte.php';
require_once '../service/chargerClass.php';
spl_autoload_register('chargerClasse');

$manager= new managerCompte($bdd);
$addsolde = new compte ($_POST);
$addsolde= $manager->getIdCompte($addsolde);
$addsolde->setSolde($addsolde->getSolde()+$_POST['addMoney']);
$manager->updadeMoney($addsolde);
header('location:home.php');
require '../view/home.php';
?>
