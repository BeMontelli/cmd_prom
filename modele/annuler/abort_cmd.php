<?php
//
function abort_cmd($user, $date_cmd)
{
    global $bdd;

    $req = $bdd->prepare('DELETE FROM `cmd` WHERE user_iduser ="'.$user.'" AND date_cmd ="'.$date_cmd.'"');
    $req->execute();
    $resto = $req->fetchAll();

}
