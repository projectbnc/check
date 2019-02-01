<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BNC</title>
  <link href="style.css" rel="stylesheet">
  <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
            </div>
        <div class="col-md-6">
             <div class="card" style="width: 29rem;">
                <img src="logo.jpg">
                    <div class="card-title">
                        <h6>Enregistrer un nouveau utilisateur</h6>
                    </div>
                    <div class="container">
             	        <form class="form-horizontal col-md-12" action="savedata.php" method="post">
                            <div class="form-group row">
                                <label for="NumeroCompte" class="col-md-6">Nom</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="Lastname">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Montant" class="col-sm-6 col-form-label">Prenom</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="FirstName">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="NumeroCompte" class="col-md-6">Pseudo</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="Username">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Montant" class="col-sm-6 col-form-label">Password</label>
                                <div class="col-md-6">
                                  <input type="password" class="form-control" name="password">
                                </div>
                              </div>
                              <div class="form-group row">
                                    <label for="Montant" class="col-sm-6 col-form-label">Departement</label>
                                    <div class="col-md-6">
                                        <input type="password" class="form-control" name="status">
                                    </div>
                                </div>
                                <div class="form-group row">
                           	        <div class="col-md-8">
                           			    <button type="submit" class="btn btn-secondary">Retour</button>
                           	        </div>
                                    <div class="col-md-4">
                           	            <input type="submit" class=" btn btn-secondary" value="Enregistrer">
                                    </div>
                                </div> 
                            </form>
                        </div>     
                    </div> 
                </div>
            </div> 
        </div>
    </body>
</html>