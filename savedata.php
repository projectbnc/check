<?php
    echo $_POST['nom'];
     class savedata{

        function registredEmployee(){
            include('connectdb.php');
            $db= new connectbd();
            $db=$db->conndb();
            $req=$db->prepare('INSERT INTO employee(IDEmployee,FirstNameEployee,LastNameEmployee,UserName,Password,Status) VALUES (:nom,:FirstNameEployee,:LastNameEmployee,:UserName,:Password,:Status)');
            $req->execute(array(
               'nom'=> $_POST['nom'],
               'FirstNameEployee'=> $_POST['nom'],
               'LastNameEmployee'=> $_POST['nom'],
               'UserName'=> $_POST['nom'],
               'Password'=> $_POST['nom'],
               'Status'=> $_POST['nom']
            ));
        }
    }  
     $data=new savedata();
     $data->registredEmployee();