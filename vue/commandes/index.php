<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Réceptions</title>
	<link rel="stylesheet" type="text/css" href="css/sample.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.css">
	<link href='https://fonts.googleapis.com/css?family=Merienda:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Arimo' rel='stylesheet' type='text/css'>
	</head>

	<body>

<?php include('controlleur/headlog/index.php'); ?>
<h1>Les Commandes du jour</h1>

<?php $verif = 0; ?>
<?php
	$verif_nom_resto = "";
	$verif_nom_nommenu = "";
	foreach($cmds as $cmd_spe)
	{
?>
	<div class="cmd_list">
		<div class="cmd_resto">
			<?php 
			if ($cmd_spe['nomresto'] == $verif_nom_resto)
		    {
		    	$verif_nom_resto = $cmd_spe['nomresto'];
			}
			else{
				$verif_nom_resto = $cmd_spe['nomresto'];
			?>
				<div class="desc_resto">
					<h2>Passée au restaurant: <b><?php echo $cmd_spe['nomresto'];?></b></h2>
					<p>Adresse: <?php echo $cmd_spe['adresseresto'];?></p>
					<p>Téléphone: <?php echo $cmd_spe['telresto'];?></p>
				</div>
			<?php
			}
			?>
			<div class="cmd_menu">
				<?php 
				if ($cmd_spe['nommenu'] == $verif_nom_nommenu)
			    {
			    	$verif_nom_nommenu = $cmd_spe['nommenu'];
				}
				else{
					$verif_nom_nommenu = $cmd_spe['nommenu'];
				?>	
					<h3>Menu "<?php echo $cmd_spe['nommenu'];?>"</h3>
				<?php
				}
				?>
			</div>
			<div class="cmd_user"> 
					<h4><b>Commande de "<?php echo $cmd_spe['nomuser'].' '.$cmd_spe['prenomuser'];?>"</b></h4>
				<ul>
					<li>Entrée: <?php echo $cmd_spe['cmd_entree'];?></li>
					<li>Plat: <?php echo $cmd_spe['cmd_plat'];?></li>
					<li>Dessert: <?php echo $cmd_spe['cmd_dessert'];?></li>
					<li>Boisson: <?php echo $cmd_spe['cmd_boisson'];?></li>
				</ul>
				<p>Prix: <?php echo $cmd_spe['prix'];?>€</p>
			</div>
		</div>
	</div>
<?php
	}
?>

<a href="index.php">Retour</a>

	</body>
</html>
