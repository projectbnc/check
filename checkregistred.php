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
            <img src="images.jpg" style="width:10%;padding:10px;">
      </div>
    </header>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="card" style="width: 69rem;">
                    <div class="card-title">
                        <div class="row">
                            <div class="col-md-12">
                                <h6>Veuillez completer le tableau</h6>
                            </div>   
                        </div>
                    </div>
                    <div class="container">
                        <table class="table table-bordered table-striped table-condensed">
                            <thead>
                                <tr>
                                    <th> Numero du cheque</th>
                                    <th> Numero compte du cheque</th>
                                    <th>Routing</th>
                                    <th>Compte de depot</th>
                                    <th>Montant</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                              include ("clear.php");
                              for($i=0;$i<$temp;$i++){
                           echo '
                                <form action="savecheck.php" method="post">
                                 <tr>
                                    <td>'. $routing[$i] .'</td>
                                    <td>'. $accountnumber[$i]. '</td>
                                    <td>'. $numcheck[$i]. '</td>
                                    <td>
                                            <input type="text" class="form-control" name="routing" value="'.$routing[$i].'">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control">
                                        </td>
                                        <td>
                                            <button type="submit" class="btn btn-secondary">Save</button>
                                        </td>
                                </tr>
                                </form>';
                              }
                            ?>
                            </tbody>
                        </table>
                        <div class="row" >
                            <div class="col-md-2" style="margin-left:28rem;margin-bottom:3rem;">
                                <button class="btn btn-primary" type="button">OK </button>
                            </div>
                        </div>
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