<?php
function get_restaurant($idresto)
{
    global $bdd;
        
    $req = $bdd->prepare('SELECT idresto, nomresto, telresto, adresseresto FROM resto WHERE nomresto = "'.$idresto.'"');
    $req->execute();
    $infos_resto = $req->fetchAll();
    
    return $infos_resto;
}

function get_menus_restos($idresto)
{
    global $bdd;
        
    $req = $bdd->prepare('SELECT nomresto, idmennu, nommenu, prix, idresto 
    FROM menu, resto
    WHERE resto.idresto = menu.resto_idresto
    AND nomresto = "'.$idresto.'"
    ORDER BY nomresto');
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

