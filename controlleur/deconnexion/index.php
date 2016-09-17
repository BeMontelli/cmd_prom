<?php
// DECONNEXION du site
include_once('modele/deconnexion/deconnexion.php');

session_start();

session_destroy();

include_once('vue/deconnexion/index.php');