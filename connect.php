<!--This page is used to connect the webpage and database-->

<?php
    /*Storing name*/
    $ServerName = "localhost:3306";
    $UserName = "root";
    $Password = "usbw";
    $dbName = "students";


    /*Connection*/
    $conn = new mysqli($ServerName, $UserName, $Password, $dbName);

    if ($conn -> connect_error){
        /*The full stop means connecting the two statements together*/
        die("Connection failed." . $conn -> connect_error);
    }
?>