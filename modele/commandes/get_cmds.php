<?php
function get_cmds()
{
    global $bdd;

    $date = date("Y-m-d");
        
    $req = $bdd->prepare('SELECT nomresto, adresseresto, telresto, nomuser, prenomuser, nommenu, prix, cmd_entree, cmd_plat, cmd_dessert, cmd_boisson 
FROM cmd, menu, user, resto
WHERE menu.idmennu = cmd.menu_idmennu 
AND user.iduser= cmd.user_iduser
AND resto.idresto= cmd.resto_nomresto
AND cmd.date_cmd = "'.$date.'"
ORDER BY nomresto');
    $req->execute();
    $resto = $req->fetchAll();
    
    return $resto;
}