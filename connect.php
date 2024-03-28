<?php
    $servername = "localhost";
    $dbname='ibomfoodie';
    $username = "joy";
    $password ="IAAOBOjuly1993" ;
    // Create connection
    $db = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$db) 
    {
       echo 'Connect_error:'. mysqli_connect_error();
    }
   
?>