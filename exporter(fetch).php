<?php
include('dbconnect.php');

// Attempt select query execution
$sql = "SELECT * FROM exporter";
if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
			    echo "<th>admission</th>";
                echo "<th>contract</th>";
                echo "<th>location</th>";
				echo "<th>duration</th>";
                echo "<th>telephone</th>";
				echo "<th>market</th>";
			  echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
			    echo "<td>" . $row['admission'] . "</td>";
                echo "<td>" . $row['contract'] . "</td>";
                echo "<td>" . $row['location'] . "</td>";
                echo "<td>" . $row['duration'] . "</td>";
                echo "<td>" . $row['telephone'] . "</td>";
				echo "<td>" . $row['market'] . "</td>";
				
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