<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>infos clients gestion client</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container my-5">
        <h2>Informations du client </h2>
        <a class="btn btn-primary" href="/app/create.php" role="button">New Client</a>
        <br>
        <table class="table">
            <thead>
                <th>ID_Client</th>
                <th>Name</th>
                <th>Prenom</th>
                <th>Situation_Familiale</th>
                <th>Num_tel</th>
                <th>Adresse</th>
                <th>Mail</th>
                <th>Year_Birthday</th>
            </thead>
            <tbody>
                <?php
                    require_once('functions.php');
                    $result = get_all_user_info($_GET["name"],$_GET["prenom"]);

                    if(!$result){
                        die("Invalid query or result empty ");
                    }

                    //read data of each row
                    while($row = $result->fetch(PDO::FETCH_ASSOC)){
                        echo "
                        <tr>
                             <td>$row[ID_C]</td>
                             <td>$row[Nom]</td>
                             <td>$row[Prenom]</td>
                             <td>$row[Adresse]</td>
                             <td>$row[Mail]</td>
                             <td>$row[Num_tel]</td>
                             <td>$row[Situation_Familiale]</td>
                             <td>1$row[Year_Birthday]</td>
                        ";
                    }

                ?>
                

            </tbody>
        </table>
    </div>
</body>
</html>