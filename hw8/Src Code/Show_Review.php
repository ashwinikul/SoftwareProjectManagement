<?php
    /****************************
	Database Read Operation
    
     ****************************/
            
            require_once('db_conn.php');

            $connection = connect_to_db();
            
             $sql = "SELECT * FROM DIM_REVIEW";
             $result = $connection->query($sql);

             if ($result->num_rows > 0) {
                // output data of each row
                echo "<div><table><table border="."1"."><tr><th>ID</th><th>Name</th><th>Email</th><th>Referrer</th><th>Rating</th><th>Comments</th></tr>";
                while($row = $result->fetch_assoc()) {
                  echo "<tr><td>" . $row["ID"]. "</td><td>" . $row["Name"] . "</td><td>" . $row["Email"]. "</td><td>" . $row["Referrer"]. "</td><td>" . $row["Rating"]. "</td><td>" . $row["Comments"]. "</td></tr>";
                }
                
                echo "</table></div>";
              } else {
                        echo "<br><div>0 results</div>";
                      }
       

?>



