<?php
// Le restaurant + Les menus
include_once('modele/restaurant/get_restaurant.php');

$nomrestaurant = $_GET["restaurant"];

$infos_resto = get_restaurant($nomrestaurant);

foreach($infos_resto as $cle => $resto_disp)
{
    $infos_resto[$cle]['idresto'] = htmlspecialchars($resto_disp['idresto']);
    $infos_resto[$cle]['nomresto'] = htmlspecialchars($resto_disp['nomresto']);
    $infos_resto[$cle]['telresto'] = htmlspecialchars($resto_disp['telresto']);
    $infos_resto[$cle]['adresseresto'] = htmlspecialchars($resto_disp['adresseresto']);
}

$resto_Name = "";
$val_entree_selected = [];
$val_plat_selected = [];
$val_dessert_selected = [];
$val_boisson_selected = [];

$menu_listing = get_menus_restos($nomrestaurant);

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

include_once('vue/restaurant/index.php');