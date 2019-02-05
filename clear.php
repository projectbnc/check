<?php

    include("connectdb.php");
    $db=new connectbd();
    $tem=NULL;
    $db=$db->conndb();
        $fp=fopen('lsv',"rb");
         $i=0;
         $j=0;
        while(!feof($fp)){
            $data[$i]=fgets($fp);
            $tempnumcheck[$i]=strval(substr($data[$i],0,5));
            $temprouting[$i]=strval(substr($data[$i],7,9));
    
                $req=$db->prepare('SELECT routing, IDcheck, accounttransmit FROM checktable WHERE routing=? AND IDcheck=?');
               $req->execute(array($temprouting[$i],$tempnumcheck[$i]));
                while($data=$req->fetch()){
                    $routing[$j]=$data['routing'];
                    $numcheck[$j]=$data['IDcheck'];
                    $accountnumber[$j]=$data['accounttransmit'];
                   $tem=$data;
                   $j++;
                   $temp=$j;
                } 
            $i++;
            if($tem==NULL){
                echo "Desole";
             }
       }
       
        fclose($fp);

