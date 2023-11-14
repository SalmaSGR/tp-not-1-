
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gestion d'une banque - creation client</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

</head>
<body>
    <div class="container my-5">
        <h2>New Client</h2>

        <form method="post" action="sucess_creation.php">
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Nom</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="name" >
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Prenom</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="prenom" >
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Mail</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="mail" >
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Situation Familiale</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="situation_familiale" >
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Num tele</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="num_tele" >
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Date de naissance</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="year_birthday" >
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Adresse</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="adresse" >
                </div>
            </div>

            <div class="row mb-3">
                <div class="offset-sm-3 col-sm-3 d-grid">
                <button type="submit" class="btn btn-primary">Ajouter</button>
                </div>
                <div class="col-sm-3 d-grid">
                    <a class="btn btn-outline-primary" href="/app" role="button">Cancel</a>
                </div>
            </div>
        </form>
    </div>
</body>
</html>