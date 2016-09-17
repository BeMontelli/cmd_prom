<?php
// RECAP cmds: restaurants -> menus -> users
include_once('modele/commandes/get_cmds.php');

$cmds = get_cmds();

foreach($cmds as $key => $cmd_spe)
{
	$cmds[$key]['nomresto'] = htmlspecialchars($cmd_spe['nomresto']);
	$cmds[$key]['adresseresto'] = htmlspecialchars($cmd_spe['adresseresto']);
	$cmds[$key]['telresto'] = htmlspecialchars($cmd_spe['telresto']);
	$cmds[$key]['nomuser'] = htmlspecialchars($cmd_spe['nomuser']);
	$cmds[$key]['prenomuser'] = htmlspecialchars($cmd_spe['prenomuser']);
	$cmds[$key]['nommenu'] = htmlspecialchars($cmd_spe['nommenu']);
	$cmds[$key]['cmd_entree'] = htmlspecialchars($cmd_spe['cmd_entree']);
	$cmds[$key]['cmd_plat'] = htmlspecialchars($cmd_spe['cmd_plat']);
	$cmds[$key]['cmd_dessert'] = htmlspecialchars($cmd_spe['cmd_dessert']);
	$cmds[$key]['cmd_boisson'] = htmlspecialchars($cmd_spe['cmd_boisson']);
	$cmds[$key]['prix'] = htmlspecialchars($cmd_spe['prix']);
}

include_once('vue/commandes/index.php');
