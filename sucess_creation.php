<?php
require_once('functions.php');


    

$result = add_client($_POST['name'],$_POST['prenom'],$_POST['mail'],$_POST['situation_familiale'],$_POST['num_tele'],$_POST['year_birthday'],$_POST['adresse']);



if(!$result){
    die("error in delete user");
}else
{
    echo "succes ajout utilisateur";
}


    

?>