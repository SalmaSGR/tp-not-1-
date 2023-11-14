<?php
require_once('cnx.php');

require_once('ClientManager.php');


// Requête de récupération des données en BDD
function get_list_users() {	
    $conn = connectionBdd();
    if($conn){
        $query = "SELECT * FROM client_table";
        $res = $conn->query($query); 
        $fetched_result = $res->fetchAll(PDO::FETCH_ASSOC);
        
        if ($res === false) die("The query [$query] could not be executed.");
        
        $collection = array();       


        
        for($i = 0; $i < count($fetched_result); $i++) {
            $client_object = new ClientManager($fetched_result[$i]["ID_C"],
                                    $fetched_result[$i]["Nom"],
                                    $fetched_result[$i]["Prenom"],
                                    $fetched_result[$i]["Year_Birthday"],
                                    $fetched_result[$i]["Situation_Familiale"],
                                    $fetched_result[$i]["Adresse"],
                                    $fetched_result[$i]["Num_tel"],
                                    $fetched_result[$i]["Mail"]);
            $collection[$i]=$client_object;
               }
    }

	return $collection;
}


function get_all_user_info($nom = "",$prenom=""){
    $conn = connectionBdd();
    return $conn->query("SELECT * FROM client_table WHERE nom=\"".$nom."\" and prenom = \"".$prenom."\"");
    }


function delete_user_info($nom = "",$prenom=""){
    $conn = connectionBdd();
    $res = [];

    $id_client = $conn->query("SELECT ID_C FROM client_table WHERE nom=\"".$nom."\" and prenom = \"".$prenom."\"");
    $id_client = $id_client->fetchColumn();



    $id_compte_bancaire = $conn->query("SELECT ID_Cpt FROM compte_bancaire_table WHERE ID_C=\"".$id_client."\"");
    $id_compte_bancaire = $id_compte_bancaire->fetchColumn();



    //echo $id_client;
    $res = $conn->query("DELETE FROM ligne_compte_table WHERE ID_Cpt=\"".$id_compte_bancaire."\"");    
    $res = $conn->query("DELETE FROM compte_bancaire_table WHERE ID_C=\"".$id_client."\"");
    $res = $conn->query("DELETE FROM client_table WHERE nom=\"".$nom."\" and prenom = \"".$prenom."\"");

    return $res;
    }
function get_user_solde($nom = "",$prenom=""){
        $conn = connectionBdd();
        $res = [];
    
        $query = $conn->query("SELECT Solde FROM client_table natural join compte_bancaire_table WHERE nom=\"".$nom."\" and prenom = \"".$prenom."\"");
        $solde = $query->fetchColumn();
    
    
        return $solde;
        
        }

function get_user_relve($nom = "",$prenom=""){
            $conn = connectionBdd();
            $res = [];
        
            $releve_compte = $conn->query("SELECT Montant, Date_de_transaction, Description FROM client_table natural join compte_bancaire_table natural join ligne_compte_table WHERE client_table.nom=\"".$nom."\" and client_table.prenom = \"".$prenom."\" ORDER BY Date_de_transaction desc;");

            //$releve_compte = $query->fetchColumn();

            //print_r($releve_compte);
        
            return $releve_compte;            
            }
    

function add_client($name,$prenom,$mail,$situation_familiale,$num_tele,$year_birthday,$adresse){
    $conn = connectionBdd();
    return $conn->query("INSERT INTO client_table(Nom,Prenom,Year_Birthday,Situation_Familiale,Adresse,Num_tel,Mail) VALUES (
                        '".$name."','".$prenom."','".$year_birthday."','".$situation_familiale."','".$adresse."','".$num_tele."','".$mail."");


}

function get_all_compte_bancaire($id_cpt = "",$solde=""){
    $conn = connectionBdd();
    return $conn->query("SELECT * FROM compte_bancaire_table WHERE id_cpt=\"".$id_cpt."\" and solde = \"".$solde."\"");
    }

function add_compte_bancaire($id_cpt,$id_c,$date_douverture,$solde,$type){
        $conn = connectionBdd();
        return $conn->query("INSERT INTO compte_bancaire_table(ID_Cpt,ID_C,Dat_d_ouverture,Solde,Type_de_Compte) VALUES (
                            '".$id_cpt."','".$id_c."','".$date_douverture."','".$solde."','".$type."');");
    
    
    }

function get_all_banque($nom = "",$adrs=""){
    $conn = connectionBdd();
    return $conn->query("SELECT * FROM banque_table WHERE nom=\"".$nom."\" and adrs = \"".$adrs."\"");
    }
function add_banque($id_banque,$adrs,$nom,$phone){
        $conn = connectionBdd();
        return $conn->query("INSERT INTO banque_table(ID_Banque,Adrs,Nom_Banque,Phone_Number) VALUES (
                            '".$id_banque."','".$adrs."','".$nom."','".$phone."');");
    
    
    }
function get_all_ligne_compte($description = "",$montant=""){
        $conn = connectionBdd();
        return $conn->query("SELECT * FROM ligne_compte_table WHERE =\"".$description."\" and montant = \"".$montant."\"");
    } 
function add_ligne_compte($id_ligne,$id_cpt,$date_de_tran,$montant,$description){
        $conn = connectionBdd();
        return $conn->query("INSERT INTO ligne_compte_table(ID_Ligne,ID_Cpt,Date_de_transaction,Montant,Description) VALUES (
                            '".$id_ligne."','".$id_cpt."','".$date_de_tran."','".$montant."','".$description."');");
    }

function get_all_conseiller($description = "",$montant=""){
        $conn = connectionBdd();
        return $conn->query("SELECT * FROM ligne_compte_table WHERE =\"".$description."\" and montant = \"".$montant."\"");
    } 

function add_conseiller($id_conseiller,$id_banque,$nom,$prenom,$num_tel,$adrs_mail){
        $conn = connectionBdd();
        return $conn->query("INSERT INTO conseiller_bancaire_table(ID_Conseiller,ID_Banque,Nom,Prenom,Numero_de_telephone,Adresse_e_mail) VALUES (
                            '".$id_conseiller."','".$id_banque."','".$nom."','".$prenom."','".$num_tel."','".$adrs_mail."');");
    }

?>