<?php
 
   class savedata{

        function registredEmployee(){
            include("connectdb.php");
            $db= new connectbd();
            $db=$db->conndb();
            $req=$db->prepare('INSERT INTO employee(IDEmployee,FirstNameEployee,LastNameEmployee,UserName,Password,Status) VALUES (:nom,:FirstNameEployee,:LastNameEmployee,:UserName,:Password,:Status)');
            $req->execute(array(
               'nom'=> $_POST['Lastname'],
               'FirstNameEployee'=> $_POST['FirstName'],
               'LastNameEmployee'=> $_POST['Lastname'],
               'UserName'=> $_POST['Username'],
               'Password'=> $_POST['password'],
               'Status'=> $_POST['Username']
            ));
            echo "Success";
        }

        function registredcheck($IDcheck,$routing,$accounttransmit){
            include("connectdb.php");
            $db= new connectbd();
            $db=$db->conndb();
            $req=$db->prepare('INSERT INTO checktable(IDcheck,routing,accounttransmit,datedeposit) VALUES (:IDcheck,:routing,:accounttransmit,NOW())');
            $req->execute(array(
                'IDcheck'=>$IDcheck,
                'routing'=>$routing,
                'accounttransmit'=>$accounttransmit
            ));
            echo "Success";
        }

        function afficher(){
            echo "hdjdhdjd";
        }
}  
     //$data=new savedata();
     //$data->registredEmployee();