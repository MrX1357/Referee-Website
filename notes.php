<?php
    require_once "connect.php";

    $sql = "SELECT ID, FirstName, LastName, Year, Address FROM students";
    
    $result = $conn -> query($sql);

    echo "<table>";
        echo "<tr>";
            echo "<th>ID</th>";
            echo "<th>FirstName</th>";
            echo "<th>LastName</th>";
            echo "<th>Year</th>";
            echo "<th>Address</th>";
        echo "</tr>";

    /*While loop to display the result*/
    if($result -> num_rows > 0){
        while($row=$result->fetch_assoc()){
            echo "<tr>";
                echo "<td>" . $row["ID"] . "</td>";
                echo "<td>" . $row["FirstName"] . "</td>";
                echo "<td>" . $row["LastName"] . "</td>";
                echo "<td>" . $row["Year"] . "</td>";
                echo "<td>" . $row["Address"] . "</td>";
            echo "</tr>";
        }

    }
    else{
        echo "0 results";
    }

    echo "</table>";


?>