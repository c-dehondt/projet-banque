<?php
require_once '../model/connexion_sql.php';
require '../model/managerCompte.php';
require_once '../service/chargerClass.php';
spl_autoload_register('chargerClasse');


$manager= new managerCompte($bdd);
$comptes= $manager->getCompte();


require '../view/home.php';
 ?>
