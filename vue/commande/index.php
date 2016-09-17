<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Réceptions</title>
	<link rel="stylesheet" type="text/css" href="css/sample.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.css">
	<link href='https://fonts.googleapis.com/css?family=Arimo' rel='stylesheet' type='text/css'>
	</head>

	<body>

<?php include('controlleur/headlog/index.php'); ?>
<h1>Commande:</h1>

<div class="resto_menu">
	<h2>Choisissez votre menu</h2>
	<ul>
		<?php
		foreach($menu_listing as $cle => $menus_liste)
		    {
		?>
        <li>
        	<div class="resto_command">
        	<form method="POST" action="">
        		<?php 
        			if($resto_Name != $menus_liste['nomresto']){
        				echo '<h3>'.$menus_liste['nomresto'].'</h3>';
        				$resto_Name = $menus_liste['nomresto'];
        			}
        		?>
				<p><b><?php echo $menus_liste['nommenu']; ?></b></p>
				<div class="menu_resto">
				<!--<pre>
				<?php var_dump($val_dessert_selected); ?>
				</pre>-->
					<ul>
						<input type="hidden" name="resto" value="<?php echo $menus_liste['idresto']; ?>">
						<input type="hidden" name="menu" value="<?php echo $menus_liste['idmennu']; ?>">
						<li>Entrée:
						<SELECT name="entree" size="1">
							<option>Aucune</option>
							<?php $cle_entree = 0; ?>
							<?php foreach ($val_entree_selected as $value): ?>
								<?php 								
									if ($val_entree_selected[$cle_entree]['nommenu'] == $menus_liste['nommenu']) {?>
										<?= isset($val_entree_selected[$cle]['nomentree']) ? '<option>'.$val_entree_selected[$cle_entree]['nomentree'].'</option>' : '' ?>
									<?php }
									$cle_entree ++;
								 ?>
							<?php endforeach ?>
						</SELECT>
						</li>
						<li>Plat:
						<SELECT name="plat" size="1">
							<option>Aucune</option>
							<?php $cle_plat = 0; ?>
							<?php foreach ($val_plat_selected as $value): ?>
								<?php 								
									if ($val_plat_selected[$cle_plat]['nommenu'] == $menus_liste['nommenu']) {?>
										<?= isset($val_plat_selected[$cle]['nomplat']) ? '<option>'.$val_plat_selected[$cle_plat]['nomplat'].'</option>' : '' ?>
									<?php }
									$cle_plat ++;
								 ?>
							<?php endforeach ?>
						</SELECT>
						</li>
						<li>Dessert:
						<SELECT name="dessert" size="1">
							<option>Aucune</option>
							<?php $cle_dessert = 0; ?>
							<?php foreach ($val_dessert_selected as $value): ?>
								<?php 								
									if ($val_dessert_selected[$cle_dessert]['nommenu'] == $menus_liste['nommenu']) {?>
										<?= isset($val_dessert_selected[$cle]['nomdessert']) ? '<option>'.$val_dessert_selected[$cle_dessert]['nomdessert'].'</option>' : '' ?>
									<?php }
									$cle_dessert ++;
								 ?>
							<?php endforeach ?>
						</SELECT>
						</li>
						<li>Boisson:
						<SELECT name="boisson" size="1">
							<option>Aucune</option>
							<?php $cle_boisson = 0; ?>
							<?php foreach ($val_boisson_selected as $value): ?>
								<?php 								
									if ($val_boisson_selected[$cle_boisson]['nommenu'] == $menus_liste['nommenu']) {?>
										<?= isset($val_boisson_selected[$cle]['nomboisson']) ? '<option>'.$val_boisson_selected[$cle_boisson]['nomboisson'].'</option>' : '' ?>
									<?php }
									$cle_boisson ++;
								 ?>
							<?php endforeach ?>
						</SELECT>
						</li>
						<input type="hidden" name="iduser" value="<?php echo $_SESSION['iduser']; ?>">
					</ul>
					<input type="submit" value="Commander">
				</div>
			</form>
			</div>
        </li>
        <?php
		    }
		?>
	</ul>
</div>
<a href="index.php">Retour</a>

	</body>
</html>