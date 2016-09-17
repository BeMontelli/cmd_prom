<?php
// RESTOS dispos + nb cmd ajd + état connexion + la commande passée
include_once('modele/accueil/get_infos.php');

$iduser = $_SESSION['iduser'];
$date = date("Y-m-d");

///////////////////////////////////////
$nb_cmd = get_nbcmd($date);
foreach($nb_cmd as $cle => $cmds)
{
    $nb_cmd[$cle]['nombre'] = htmlspecialchars($cmds['nombre']);
}

///////////////////////////////////////
$nb_u = get_nb_users();
foreach($nb_u as $cle => $nb_users)
{
    $nb_u[$cle]['nombre_users_inscrits'] = htmlspecialchars($nb_users['nombre_users_inscrits']);
}

///////////////////////////////////////
$menu = get_current_menu($iduser, $date);
foreach($menu as $cle => $current_menu)
{	
	$menu[$cle]['nomresto'] = htmlspecialchars($current_menu['nomresto']);
    $menu[$cle]['nommenu'] = htmlspecialchars($current_menu['nommenu']);
    $menu[$cle]['prix'] = htmlspecialchars($current_menu['prix']);
    $menu[$cle]['cmd_entree'] = htmlspecialchars($current_menu['cmd_entree']);
    $menu[$cle]['cmd_plat'] = htmlspecialchars($current_menu['cmd_plat']);
    $menu[$cle]['cmd_dessert'] = htmlspecialchars($current_menu['cmd_dessert']);
    $menu[$cle]['cmd_boisson'] = htmlspecialchars($current_menu['cmd_boisson']);
}

///////////////////////////////////////
$resto_listing = get_restaurants();
foreach($resto_listing as $cle => $restos_liste)
{
    $resto_listing[$cle]['nomresto'] = htmlspecialchars($restos_liste['nomresto']);
}

if ($menu == NULL ) {
    ?>
    <style type="text/css">.cmd_perso{display: none;}.nocmd{display: block!important;}</style>
    <?php
}
else{
    ?>
    <style type="text/css">.go_cmd{display: none;}</style>
    <?php
    }

include_once('vue/accueil/index.php');