<?php
function connexion($mdp, $login)
{
    global $bdd;
        
    $req = $bdd->prepare('SELECT iduser, nomuser, prenomuser, mdpuser FROM user WHERE nomuser = "'.$login.'" AND mdpuser = "'.$mdp.'" LIMIT 0,1');
    $req->execute();
    $trylog = $req->fetchAll();
    return $trylog;
}
