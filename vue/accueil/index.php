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

<div class="bckimg"></div>
<div class="bck"></div>

<div class="accueil">
	<div class="user_etat col-md-12">
		<div class="logo col-md-4">
			<h1>On mange où?</h1>
		</div>
		<div class="precuser col-md-4">
			<p><?php echo $_SESSION['nomuser'].' '.$_SESSION['prenomuser'] ?></p>
		</div>
		<div class="decouser col-md-4">
			<a href="deconnexion.php">Déconnexion</a>
		</div>
	</div>
</div>

<div class="col-md-12">
	<div class="go_cmd col-md-6">
		<div class="space">
			<a href="commande.php">Passer votre commande</a>
		</div>
	</div>
	<div class="recap col-md-6">
		<div class="space">
			<h2>Commandes passées aujourd'hui</h2>
			<p><?php echo $cmds['nombre']; ?> personnes sur <?php echo $nb_users['nombre_users_inscrits']; ?> ont commandées</p>
			<a href="commandes.php">Voir les commandes</a>
			<div class="nocmd">
				<p><i>Vous n'avez aucunes commande aujourd'hui.</i></p>
			</div>
			<div class="cmd_perso">
				<h3>Votre commande au restaurant <?php echo $current_menu['nomresto']?>:</h3>
				<p>Menu "<?php echo $current_menu['nommenu']?>" du restaurant à <?php echo $current_menu['prix']?>€ </p>
				<p>Contenu:</p>
				<ul>
					<li>Entrée: <?php echo $current_menu['cmd_entree'];?></li>
					<li>Plat: <?php echo $current_menu['cmd_plat'];?></li>
					<li>Dessert: <?php echo $current_menu['cmd_dessert'];?></li>
					<li>Boisson: <?php echo $current_menu['cmd_boisson'];?></li>
				</ul>
				<a href="annuler.php">Annuler votre commande</a>
			</div>
		</div>
	</div>

	<div class="restos col-md-12">
		<div class="space">
			<h2>Nos restaurants disponibles</h2>
		</div>
			<ul>
				<?php
		            foreach($resto_listing as $restos_liste)
		        {
		        ?>
		        <li>
		        	<div class="resto_current col-md-4">
		        	<div class="imgresto">
		        		<img src="" alt="resto">
		        	</div>
		        	<div class="nomresto">
		        		<a href="restaurant.php?restaurant=<?php echo $restos_liste['nomresto'] ?>"><?php echo $restos_liste['nomresto'] ?></a>
		        	</div>
		        	</div>
		        </li>
		        <?php
		            }
		        ?>
			</ul>
	</div>
</div>

	</body>
</html>
