<?php
session_start();

if (isset($_SESSION['nomuser']) && isset($_SESSION['prenomuser']) ) {
}
else{
    header('Location: connexion.php');
}

function get_nbcmd($date)
{	
	//SELECT COUNT(idcmd) FROM cmd WHERE date_cmd = "2016-01-12"
    global $bdd;
        
    $req = $bdd->prepare('SELECT COUNT(idcmd) AS nombre FROM cmd WHERE date_cmd = "'.$date.'"');
    $req->execute();
    $nbcmd = $req->fetchAll();
    
    return $nbcmd;
}

function get_nb_users()
{	
	//SELECT COUNT(iduser) FROM user
    global $bdd;
        
    $req = $bdd->prepare('SELECT COUNT(iduser) AS nombre_users_inscrits FROM user');
    $req->execute();
    $nbusers = $req->fetchAll();
    
    return $nbusers;
}

function get_current_menu($iduser, $date)
{	
	//SELECT idcmd, user_iduser, nommenu, prix, cmd_entree, cmd_plat, cmd_dessert, cmd_boisson, date_cmd FROM cmd, menuWHERE user_iduser = "1" AND date_cmd = "2016-01-12" AND cmd.menu_idmennu = menu.idmennu
    global $bdd;
        
    $req = $bdd->prepare('SELECT idcmd, user_iduser, nomresto, nommenu, prix, cmd_entree, cmd_plat, cmd_dessert, cmd_boisson, date_cmd FROM cmd, menu, resto WHERE user_iduser = "'.$iduser.'" AND date_cmd = "'.$date.'" AND cmd.menu_idmennu = menu.idmennu AND resto.idresto = cmd.resto_nomresto');
    $req->execute();
    $menuu = $req->fetchAll();

    return $menuu;
}

function get_restaurants()
{	
	//SELECT nomresto FROM resto
    global $bdd;
        
    $req = $bdd->prepare('SELECT nomresto FROM resto');
    $req->execute();
    $restos = $req->fetchAll();

    return $restos;
}
