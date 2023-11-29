<?php
include('dbconnect.php');

// Attempt select query execution
$sql = "SELECT * FROM retailer";
if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
			    echo "<th>name</th>";
                echo "<th>contact</th>";
                echo "<th>type</th>";
				echo "<th>date</th>";
                echo "<th>price</th>";
				echo "<th>location</th>";
			  echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
			    echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['contact'] . "</td>";
                echo "<td>" . $row['type'] . "</td>";
                echo "<td>" . $row['date'] . "</td>";
                echo "<td>" . $row['price'] . "</td>";
				echo "<td>" . $row['location'] . "</td>";
				
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 
// Close connection
mysqli_close($conn)


?>