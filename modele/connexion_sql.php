<?php

	$hote='ou-on-mange.mmi-lepuy.fr';
	$port='';
	$nom_bd='web1256_db';
	$identifiant='web1256_sql';
	$mot_de_passe='mmi2016';
	$options = array (PDO :: MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");


try
{	
    $bdd = new PDO('mysql:host='.$hote.';dbname='.$nom_bd.'', $identifiant, $mot_de_passe, $options);
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}
