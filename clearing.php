<?php

class clearing{
    private $info;
    private $routing;
    private $numcheck;
    private $accountnumber;


    function readfile(){
        $fp=fopen('lsv',"rb");
            $routing=fread($fp,5);
            
            fseek($fp,7);
            $numcheck=fread($fp,4);
            
            fseek($fp,11);
            $accountnumber=fread($fp,14);
            echo "Routing check: ".$routing;
            echo " Numero check: ".$numcheck;
            echo " Numero compte: ".$accountnumber;
         }
}

$test=new clearing();
$test->readfile();
