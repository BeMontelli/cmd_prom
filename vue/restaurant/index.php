<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
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
<div class="splash_resto">
<div class="bckresto">
    <img src="" alt="bck resto">
</div>
<div class="titre_resto">
    <h1>Le restaurant <?php echo $resto_disp['nomresto']; ?></h1>
</div>
    
</div>
<div class="resto_listing">
    <div class="resto">
        <div class="col-md-12">
        <div class="adresse_resto col-md-6">
           <p>Adresse: <?php echo $resto_disp['adresseresto']; ?></p>
        </div>
        <div class="tel_resto col-md-6">
            <p>Téléphone: <?php echo $resto_disp['telresto']; ?></p>
        </div>
        <h3>Les menus du restaurants</h3>
        <?php
        foreach($menu_listing as $cle => $menus_liste)
            {
        ?>
        <div class="menu col-md-6">
            <div class="menu_precis">
                <p><b><?php echo $menus_liste['nommenu']; ?> - <?php echo $menus_liste['prix'] ?>€</b></p>
                <div class="menu_resto">
                    <ul>
                        <li>Entrées:
                            <?php $cle_entree = 0; ?>
                            <?php foreach ($val_entree_selected as $value): ?>
                                <?php
                                    if ($val_entree_selected[$cle_entree]['nommenu'] == $menus_liste['nommenu']) {?>
                                        <?= isset($val_entree_selected[$cle]['nomentree']) ? '<option>'.$val_entree_selected[$cle_entree]['nomentree'].'</option>' : '' ?>
                                    <?php }
                                    $cle_entree ++;
                                 ?>
                            <?php endforeach ?>
                        </li>
                        <li>Plats:
                            <?php $cle_plat = 0; ?>
                            <?php foreach ($val_plat_selected as $value): ?>
                                <?php                               
                                    if ($val_plat_selected[$cle_plat]['nommenu'] == $menus_liste['nommenu']) {?>
                                        <?= isset($val_plat_selected[$cle]['nomplat']) ? '<option>'.$val_plat_selected[$cle_plat]['nomplat'].'</option>' : '' ?>
                                    <?php }
                                    $cle_plat ++;
                                 ?>
                            <?php endforeach ?>
                        </li>
                        <li>Desserts:
                            <?php $cle_dessert = 0; ?>
                            <?php foreach ($val_dessert_selected as $value): ?>
                                <?php                               
                                    if ($val_dessert_selected[$cle_dessert]['nommenu'] == $menus_liste['nommenu']) {?>
                                        <?= isset($val_dessert_selected[$cle]['nomdessert']) ? '<option>'.$val_dessert_selected[$cle_dessert]['nomdessert'].'</option>' : '' ?>
                                    <?php }
                                    $cle_dessert ++;
                                 ?>
                            <?php endforeach ?>
                        </li>
                        <li>Boissons:
                            <?php $cle_boisson = 0; ?>
                            <?php foreach ($val_boisson_selected as $value): ?>
                                <?php                               
                                    if ($val_boisson_selected[$cle_boisson]['nommenu'] == $menus_liste['nommenu']) {?>
                                        <?= isset($val_boisson_selected[$cle]['nomboisson']) ? '<option>'.$val_boisson_selected[$cle_boisson]['nomboisson'].'</option>' : '' ?>
                                    <?php }
                                    $cle_boisson ++;
                                 ?>
                            <?php endforeach ?>
                        </li>
                      </ul>
                </div>
            </div>
        </div>
        <?php
            }
        ?>  
        </div>
        
    </div>
</div>
<a href="index.php">Retour</a>
 
</body>
</html>
