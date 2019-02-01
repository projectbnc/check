<?php
    class connectbd{
        private $db;

        function conndb(){
        try{
            $db=new PDO('mysql:host=localhost;dbname=checkmanage','root','Franck2014');
        }
        catch(Exception $e){
            die('Error :' .$e->getMessage());
            }
            return $db;
        }    
    }