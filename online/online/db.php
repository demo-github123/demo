<?php
        $server="localhost";
        $user="root";
        $password="";
        $db="oexam_db";

        $con=mysqli_connect($server,$user,$password,$db);

        if($con)
        {
            echo "conncetion successful";
        
        }
        else
        {
            echo "No conncetion";
        }