<?php      
$host = "localhost";  
$user = "root";  
$password = '';  
$db_name = "gpay";  

$con = mysqli_connect($host, $user, $password, $db_name);  
if(mysqli_connect_errno()) {  
    die("Failed to connect with MySQL: ". mysqli_connect_error());  
}        
        $sql = "select *from activity";  
        $result = mysqli_query($con, $sql);  

        echo "<table border='5'>";
        echo "<th>from </th>";
        echo "<th>to</th>";
        echo "<th>amount</th>";
        echo "<th>status</th>";
        if ($result->num_rows > 0) 
         {
            // output data of each row
            while($row = $result->fetch_assoc()) 
            {
              echo "<tr>";
              echo "<td>" .$row["fromid"]. " </td> <td> " .$row["toid"]. " </td> <td>" .$row["amt"]. "</td> <td>".$row["status"]."<br>";
              echo "</tr>";
                    }
          }
           else
         {
            echo "0 results";
          }

          echo "</table>";
          $con->close();
?>  

