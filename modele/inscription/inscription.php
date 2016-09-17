<?php
function inscription($nomuser, $prenomuser, $mdp)
{
    global $bdd;
        
    $req = $bdd->prepare('INSERT INTO `user`(`nomuser`, `prenomuser`, `mdpuser`) VALUES ("'.$nomuser.'","'.$prenomuser.'","'.$mdp.'")');
    $req->execute();
    $crea = $req->fetchAll();
    
    return $crea;
}
