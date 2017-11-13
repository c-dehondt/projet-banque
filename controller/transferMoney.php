<?php
require_once '../model/connexion_sql.php';
require '../model/managerCompte.php';
require_once '../service/chargerClass.php';
spl_autoload_register('chargerClasse');

$manager= new managerCompte($bdd);
// withdraw money from the selected account
$removesolde = new compte ($_POST);
$removesolde= $manager->getIdCompte($removesolde);
$removesolde->setSolde($removesolde->getSolde()-$_POST['money']);
$manager->updadeMoney($removesolde);
var_dump($removesolde);

$_POST["idCompte"] = $_POST["idCompteb"];
// add money from the selected account
$addsolde = new compte ($_POST);
$addsolde= $manager->getIdCompte($addsolde);
$addsolde->setSolde($addsolde->getSolde()+$_POST['money']);
$manager->updadeMoney($addsolde);

        header('Location: home.php');
        require '../view/home.php';
?>
