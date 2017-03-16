<?php
    /****************************
	Simple php-DB Program for Table Creation and Insertion
    
     ****************************/
            
            require_once('db_conn.php');

            $connection = connect_to_db();
            

            $op='Table Drop if Exists';
             $sql = sprintf("DROP TABLE IF EXISTS DIM_COURSES");
             
             QueryExec($connection,$sql,$op);
            
             $op='Table creation';
             $sql = sprintf("CREATE TABLE DIM_COURSES (Semester VARCHAR(30), Course_Name VARCHAR(50))");
             
             QueryExec($connection,$sql,$op);
             
                          
             $op='Table Insertion';
              $sql = sprintf("INSERT INTO DIM_COURSES (Semester, Course_Name) VALUES ('Fall 2016','Web Application Development')");
             
             QueryExec($connection,$sql,$op);
             
              $sql = sprintf("INSERT INTO DIM_COURSES (Semester, Course_Name) VALUES ('Spring 2016','Computer Networks')");
             
             QueryExec($connection,$sql,$op);
             
             
             $sql = "SELECT Semester, Course_Name FROM DIM_COURSES";
             $result = $connection->query($sql);

             if ($result->num_rows > 0) {
                // output data of each row
                echo "<div><table><table border="."1"."><tr><th>Semester</th><th>Course</th></tr>";
                while($row = $result->fetch_assoc()) {
                  echo "<tr><td>" . $row["Semester"]. "</td><td>" . $row["Course_Name"]. "</td></tr>";
                }
                
                echo "</table></div>";
              } else {
                        echo "<br><div>0 results</div>";
                      }
       

?>



