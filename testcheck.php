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
                        <h6>Ajouter</h6>
                    </div>
                    <div class="container">
             	        <form class="form-horizontal col-md-12" action="savecheck.php" method="post">
                            <div class="form-group row">
                                <label for="NumeroCompte" class="col-md-6">Numero cheque</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="IDcheck">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Montant" class="col-sm-6 col-form-label">Routing checque</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="routing">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="NumeroCompte" class="col-md-6">Compte de initial</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="accounttransmit">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Montant" class="col-sm-6 col-form-label">compte de depot</label>
                                <div class="col-md-6">
                                  <input type="text" class="form-control" name="accountdeposit">
                                </div>
                              </div>
                              <div class="form-group row">
                                    <label for="Montant" class="col-sm-6 col-form-label">Montant</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name='amount'>
                                    </div>
                                </div>
                                <div class="form-group row">
                           	        <div class="col-md-8">
                           			    <button  class="btn btn-secondary">Retour</button>
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
        <footer>
        <div class="container">
            Bnc, Banque Natonale de Credit<br>
            Le meme nom, une autre banque
        </div>
        </footer>
    </body>
</html>