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
                <th>Date_de_transaction</th>
                <th>Description</th>
                <th>Montant</th>
            </thead>
            <tbody>
                <?php
                    require_once('functions.php');
                    $result = get_user_relve($_GET["name"],$_GET["prenom"]);

                    if(!$result){
                        die("Invalid query or result empty ");
                    }

                    //read data of each row
                    while($row = $result->fetch(PDO::FETCH_ASSOC)){
                        echo "
                        <tr>
                             <td>$row[Date_de_transaction]</td>
                             <td>$row[Description]</td>
                             <td>$row[Montant]</td>
                        </tr>
                        ";
                    }

                ?>
                

            </tbody>
        </table>
    </div>
</body>
</html>