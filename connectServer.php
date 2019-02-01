<?php
    class connectServer{

        function connectsysax(){
            $ftp_server="127.0.0.1";
            $ftp_conn=ftp_connect($ftp_server) or die("Could not connect to $ftp_server");
            $login=ftp_login($ftp_conn,"covil","Franck2014");
            $server_file="readme.txt";
            $local_file="local.txt";
            $fp=fopen($local_file,"w");
            
                if(ftp_fget($ftp_conn,$fp,$server_file,FTP_ASCII,0))
                {
                    echo "Successfull written to $local_file.";
                }
                else {
                    echo "Error downloading $server_file.";
                }
                ftp_close($ftp_conn);
                fclose($fp);
                
                return $local_file;
        }
    }