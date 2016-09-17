<?php
//Connexion au site
include_once('modele/connexion/connexion.php');

session_start();

if (isset($_POST['nom']) && isset($_POST['mdp'])) {

	$login = $_POST['nom'];
	$mdp = $_POST['mdp'];

	$iduser = "";
	$nomuser = "";
	$prenomuser = "";
	$mdpuser = "";
	$mdpcrypted = hashPassword($mdp);

	$log = connexion($mdpcrypted, $login);
	foreach($log as $cle => $veriflog)
	{	
		$iduser = $log[$cle]['iduser'];
	    $nomuser = $log[$cle]['nomuser'];
	    $prenomuser = $log[$cle]['prenomuser'];
	    $mdpuser = $log[$cle]['mdpuser'];

	    $_SESSION['iduser'] = $iduser;
	    $_SESSION['nomuser'] = $nomuser;
	    $_SESSION['prenomuser'] = $prenomuser;

	    header('Location: index.php');
	}

}
else{
}

function hashPassword( $pwd )
{
    return sha1('t*?2^*~dX2' . $pwd . 'g!Fx;.!w)?');
}

include_once('vue/connexion/index.php');