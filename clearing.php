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
    <header class="row">
        <div class="container">
            <div class="row">
                <img src="images.jpg" style="width:10%;padding:10px;">
            </div>
      </div>
    </header>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-title">
                        <div class="row">
                            <div class="col-md-12">
                                <h6> Ensemble des cheques retournes par la BRH le :</h6>
                            </div> 
                        </div> 
                    </div>
                    <div class="container">
                        <table class="table ">
                            <thead>
                                <tr>
                                    <th > Num cheque</th>
                                    <th > Compte Cheque</th>
                                    <th>Routing</th>
                                    <th >Compte de depot</th>
                                    <th >Montant</th>
                                    <th >Decision</th>
                                    <th > Voir image</th> 
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include ("clear.php");
                                for($i=0;$i<$temp;$i++){
                                echo '
                                    <form >
                                        <tr>
                                            <td>'. $routing[$i] .'</td>
                                            <td>'. $accountnumber[$i]. '</td>
                                            <td>'. $numcheck[$i]. '</td>
                                            <td> XXXXXXXXXXXXXX</td>
                                            <td> XXXXXXXXXXXXXX </td>
                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label" for="radio1">
                                                        <input type="radio" class="form-check-input" name="radio" checked> Hold
                                                    </label>
                                                    <label class="form-check-label" for="radio2">
                                                        <input type="radio" class="form-check-input" name="radio">Debite
                                                    </label>
                                                </div>
                                            </td>
                                            <td>  <img src="check.jpg" id="check"> </td>
                                        </tr>
                                    </form>';
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>     
                </div> 
            </div>
        </div> 
    </div>
    <footer class="row">
        <div class="container">
            <div class="col-md-8" >
            BNC 2019, l'Experience au Service de toutes les Generations
            </div>
        </div>
    </footer>
</body>
</html>