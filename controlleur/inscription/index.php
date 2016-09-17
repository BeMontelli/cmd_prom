<?php
//Connexion au site
include_once('modele/inscription/inscription.php');

if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['mdp'])){

$nuser = $_POST['nom'];
$puser = $_POST['prenom'];
$mdpuser = $_POST['mdp'];
$crypted_mdpuser = hashPassword($mdpuser);

echo $nuser;
echo $puser;
echo $mdpuser;
echo $crypted_mdpuser;

$inscri = inscription($nuser, $puser, $crypted_mdpuser);

header('Location: connexion.php');

}
else{
}

function hashPassword( $pwd )
{
    return sha1('t*?2^*~dX2' . $pwd . 'g!Fx;.!w)?');
}

include_once('vue/inscription/index.php');