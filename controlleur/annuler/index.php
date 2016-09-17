<?php
//ANNULATION de la cmd passée
include_once('modele/annuler/abort_cmd.php');

session_start();

$user = $_SESSION['iduser'];
$date_current = date("Y-m-d");

abort_cmd($user, $date_current);

include_once('vue/annuler/index.php');