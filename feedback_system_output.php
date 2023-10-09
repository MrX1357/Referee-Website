<?php
    print("<h2>Loading</h2>");

    require_once 'connect.php';

    $Category = $_REQUEST['category'];
    $Full_Name = $_REQUEST['name'];
    $Email = $_REQUEST['email'];
    $File = $_REQUEST['file'];
    $Question = $_REQUEST['question'];

    $sql = "INSERT INTO students (Category, Full_Name, Email, File, Question) VALUES ('$Category','$Full_Name','$Email','$File','$Question')";

    if($conn -> query($sql) === TRUE){
        echo "New record created successfully!";
    }
    else{
        echo "Error: " . $sql . "<br>" . $conn -> error;
    }

echo "<script>location.href='feedback_system.php'</script>";
?>