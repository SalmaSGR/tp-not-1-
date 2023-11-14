<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion d'une banque</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container my-5">
        <h2>List of Clients</h2>
        <a class="btn btn-primary" href="/app/create.php" role="button">créer client</a>
        
        <br>
        <table class="table">
            <thead>
                <th>Nom</th>
                <th>Prenom</th>
            </thead>
            <tbody>
                <?php
                    require_once('functions.php');
                    require_once('ClientManager.php');
                    require_once('functions.php');

                    $result = get_list_users();
                    
                    
                    
                    //read data of each row
                    for($i = 0; $i < count($result); $i++) {

                        $solde_user = get_user_solde($result[$i]->nom,$result[$i]->prenom);

                        echo "
                        <tr>
                             <td>".$result[$i]->nom."</td>
                             <td>".$result[$i]->prenom."</td>
                             <td>  <a class=\"btn btn-primary\" href=\"/app/infos_client.php?name=".$result[$i]->nom."&prenom=".$result[$i]->prenom."\" role=\"button\">Afficher informations client</a> </td>
                             
                             <td><a onClick=\"javascript: return alert($solde_user);\" >Consulter solde</a></td><tr>

                             <td>  <a class=\"btn btn-primary\" href=\"/app/releve_compte.php?name=".$result[$i]->nom."&prenom=".$result[$i]->prenom."\" role=\"button\">Afficher releve compte</a> </td>

                             <td><a onClick=\"javascript: return confirm('Please confirm deletion');\" href='delete.php?name=".$result[$i]->nom."&prenom=".$result[$i]->prenom."'>Delete user</a></td><tr>
                        </tr>
                        ";
                    }
                    

                ?>
                

            </tbody>
        </table>
    </div>
</body>
</html>