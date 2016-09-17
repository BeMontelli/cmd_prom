<?php

session_start();

if (isset($_SESSION['nomuser']) && isset($_SESSION['prenomuser']) ) {
	include_once('vue/headlog/index.php');
	//exit;
}
else{
	header('Location: connexion.php');
}