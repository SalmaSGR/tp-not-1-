<?php
require_once('functions.php');


    

$result = delete_user_info($_GET["name"],$_GET["prenom"]);

if(!$result){
    die("error in delete user");
}else 
{
    echo "succes suppression utilisateur";
}


    

?>