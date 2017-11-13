<?php
require_once '../model/connexion_sql.php';
require '../model/managerCompte.php';
require_once '../service/chargerClass.php';
spl_autoload_register('chargerClasse');

// make a withdrawal of money
$manager= new managerCompte($bdd);
$removesolde = new compte ($_POST);
$removesolde= $manager->getIdCompte($removesolde);
$removesolde->setSolde($removesolde->getSolde()-$_POST['updateMoney']);
$manager->updateMoney($removesolde);
header('location:home.php');
require '../view/home.php';
?>
