<?php
require_once '../model/connexion_sql.php';
require '../model/managerCompte.php';
require_once '../service/chargerClass.php';
spl_autoload_register('chargerClasse');

$manager= new managerCompte($bdd);
$solde = new $_POST['money'];
$numeroDeCompte=$_POST['value'];

$manager->updateMoney($solde, $numeroDeCompte);


require '../view/home.php';
