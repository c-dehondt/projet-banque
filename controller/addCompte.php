<?php
require_once '../model/connexion_sql.php';
require '../model/managerCompte.php';
require_once '../service/chargerClass.php';
spl_autoload_register('chargerClasse');

$manager= new managerCompte($bdd);
$addCompte = new compte ($_POST);
$manager -> addCompte($addCompte);

var_dump($manager);
require '../view/home.php';
