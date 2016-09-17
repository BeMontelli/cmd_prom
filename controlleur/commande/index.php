<?php
// CHOIX menu + selon restaurants
include_once('modele/commande/new_cmd.php');


///////////////////////////////////////
$menu_listing = get_menus_restos();

$resto_Name = "";
$val_entree_selected = [];
$val_plat_selected = [];
$val_dessert_selected = [];
$val_boisson_selected = [];

foreach($menu_listing as $key => $menus_liste)
{
	$menu_listing[$key]['nomresto'] = htmlspecialchars($menus_liste['nomresto']);
    $menu_listing[$key]['idmennu'] = htmlspecialchars($menus_liste['idmennu']);
    $menu_listing[$key]['nommenu'] = htmlspecialchars($menus_liste['nommenu']);
    $menu_listing[$key]['prix'] = htmlspecialchars($menus_liste['prix']);
    $menu_listing[$key]['idresto'] = htmlspecialchars($menus_liste['idresto']);

    $menu = $menus_liste['idmennu'];

    //ENTREE MENUS
    $entree = get_entree_menu($menu);

	if(empty($entree)){
		array_push($val_entree_selected, $entree);
	}else{

		foreach($entree as $entree_spe)
		{
			$rec_entree['nomentree'] = htmlspecialchars($entree_spe['nomentree']);
			$rec_entree['nommenu'] = htmlspecialchars($entree_spe['nommenu']);
			array_push($val_entree_selected, $rec_entree);
		}
	}

	//PLAT MENUS
    $plat = get_plat_menu($menu);

	if(empty($plat)){
		array_push($val_plat_selected, $plat);
	}else{

		foreach($plat as $plat_spe)
		{
			$rec_plat['nomplat'] = htmlspecialchars($plat_spe['nomplat']);
			$rec_plat['nommenu'] = htmlspecialchars($plat_spe['nommenu']);
			array_push($val_plat_selected, $rec_plat);
		}
	}	

	//DESSERT MENUS
    $dessert = get_dessert_menu($menu);

	if(empty($dessert)){
		array_push($val_dessert_selected, $dessert);
	}else{

		foreach($dessert as $dessert_spe)
		{
			$rec_dessert['nomdessert'] = htmlspecialchars($dessert_spe['nomdessert']);
			$rec_dessert['nommenu'] = htmlspecialchars($dessert_spe['nommenu']);
			array_push($val_dessert_selected, $rec_dessert);
		}
	}

	//BOISSON MENUS
    $boisson = get_boisson_menu($menu);

	if(empty($boisson)){
		array_push($val_boisson_selected, $boisson);
	}else{

		foreach($boisson as $boisson_spe)
		{
			$rec_boisson['nomboisson'] = htmlspecialchars($boisson_spe['nomboisson']);
			$rec_boisson['nommenu'] = htmlspecialchars($boisson_spe['nommenu']);
			array_push($val_boisson_selected, $rec_boisson);
		}
	}

}

if (isset($_POST['boisson']) && isset($_POST['iduser']) && isset($_POST['entree']) && isset($_POST['plat']) && isset($_POST['dessert']) && isset($_POST['menu']) && isset($_POST['resto'])) {
	
	$r = $_POST['resto'];
	$m = $_POST['menu'];
	$b = $_POST['boisson'];
	$i = $_POST['iduser'];
	$e = $_POST['entree'];
	$p = $_POST['plat'];
	$d = $_POST['dessert'];
	$date = date("Y-m-d");

//echo $_POST['resto'].'/'.$_POST['menu'].'/'.$_POST['boisson'].'/'.$_POST['iduser'].'/'.$_POST['entree'].'/'.$_POST['plat'].'/'.$_POST['dessert'].'/'.$date;

	insert_cmd($r, $m, $i, $e, $p, $d, $b, $date);
}
else{

}

include_once('vue/commande/index.php');