<?php
    $db_name='solartec';
    $db_password='';
    $db_host='localhost';
    $db_user='root';


    $con=mysqli_connect($db_host,$db_user,$db_password,$db_name);

    if(!$con){
        echo 'Not Connected';
    }
?>