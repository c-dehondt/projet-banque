<?php
require_once '../model/connexion_sql.php';
require '../model/managerCompte.php';

if (isset($_GET['cancel'])) {
    $manager = new managerCompte($bdd);
    $manager->deleteCompte($_GET['cancel']);
    header("Location: home.php");
}