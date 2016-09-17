<?php

function get_menus_restos()
{
    global $bdd;
        
    $req = $bdd->prepare('SELECT nomresto, idmennu, nommenu, prix, idresto FROM menu, resto WHERE resto.idresto = menu.resto_idresto ORDER BY nomresto');
    $req->execute();
    $menu_restos = $req->fetchAll();

    return $menu_restos;
}

function get_boisson_menu($idmenu)
{
    global $bdd;
    $req = $bdd->prepare('SELECT nomboisson, nommenu
FROM boisson, menu, boisson_menu
WHERE boisson.idboisson = boisson_menu.idboisson
AND menu.idmennu = boisson_menu.idmennu
AND menu.idmennu = "'.$idmenu.'"');
    $req->execute();
    $boisson_menu = $req->fetchAll();
    return $boisson_menu;
}

function get_entree_menu($idmenu)
{
    global $bdd;
    $req = $bdd->prepare('SELECT nomentree, nommenu
FROM entree, entree_menu, menu
WHERE entree.identree = entree_menu.identree
AND menu.idmennu = entree_menu.idmennu
AND menu.idmennu = "'.$idmenu.'"');
    $req->execute();
    $entree_menu = $req->fetchAll();
    return $entree_menu;
}

function get_plat_menu($idmenu)
{
    global $bdd;
    $req = $bdd->prepare('SELECT nomplat, nommenu
FROM plat, plat_menu, menu
WHERE plat.idplat = plat_menu.idplat
AND menu.idmennu = plat_menu.idmennu
AND menu.idmennu = "'.$idmenu.'"');
    $req->execute();
    $plat_menu = $req->fetchAll();
    return $plat_menu;
}

function get_dessert_menu($idmenu)
{
    global $bdd;
    $req = $bdd->prepare('SELECT nomdessert, nommenu
FROM dessert, dessert_menu, menu
WHERE dessert.iddessert = dessert_menu.iddessert
AND menu.idmennu = dessert_menu.idmennu
AND menu.idmennu = "'.$idmenu.'"');
    $req->execute();
    $dessert_menu = $req->fetchAll();
    return $dessert_menu;
}


function insert_cmd($resto, $menu, $iduser, $entree, $plat, $dessert, $boisson, $date)
{
    global $bdd;
    //INSERT INTO cmd_prom.cmd (, user_iduser, resto_nomresto, menu_idmennu, cmd_entree, cmd_plat, cmd_dessert, cmd_boisson, date_cmd) VALUES ('1', '1', '1', 'Aucune', 'Kebab + frite', 'Aucun', 'Coca', '2016-01-15')

    $req = $bdd->prepare('INSERT INTO web1256_db.cmd (user_iduser, resto_nomresto, menu_idmennu, cmd_entree, cmd_plat, cmd_dessert, cmd_boisson, date_cmd) VALUES ("'.$iduser.'", "'.$resto.'", "'.$menu.'", "'.$entree.'", "'.$plat.'", "'.$dessert.'", "'.$boisson.'", "'.$date.'")');
    $req->execute();
    $insert = $req->fetchAll();
    header('Location: index.php');
}