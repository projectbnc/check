<?php
echo $_POST['routing'];
    include("connectdb.php");
    $db=new connectbd();
    $db=$db->conndb();

    $req=$db->prepare('INSERT INTO checktable(accountdeposit,accounttransmit,amount,datedeposit,IDcheck,Idemployee,images,routing) 
    VALUES (:accountdeposit,:accounttransmit,:amount,NOW(),:IDcheck,:Idemployee,:images,:routing)');
    $req->execute(array(
       'accountdeposit'=>$_POST['accountdeposit'],
       'accounttransmit'=>$_POST['accounttransmit'],
       'amount'=>$_POST['amount'],
       'IDcheck'=>$_POST['IDcheck'],
       'Idemployee'=>$_POST['IDcheck'],
       'images'=>$_POST['IDcheck'],
       'routing'=>$_POST['routing']
    ));
    header('Location:testcheck.php');




