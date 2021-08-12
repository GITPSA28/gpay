<!DOCTYPE html>
<html lang="en">
    <!-- Image and text -->

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="styles" href="css/own.css">
<?php      

$host = "localhost";  
$user = "root";  
$password = '';  
$db_name = "gpay";  
  
$con = mysqli_connect($host, $user, $password, $db_name);  
if(mysqli_connect_errno()) {  
    die("Failed to connect with MySQL: ". mysqli_connect_error());  
}  

    $uid = $_POST['userid'];
    $cname = $_POST['cntname'];
    $cid = 0;
    $phno=$_POST['phno'];


    $sql="SELECT pid FROM `profile` WHERE phno=$phno";
$result = mysqli_query($con,$sql);
while($row = mysqli_fetch_array($result)) {
$cid=$row['pid'];
}




        $sql = "INSERT INTO `usercontact` (`cid`, `userid`, `contactid`, `contactname`) VALUES (NULL, '$uid', '$cid', '$cname')"; 
        
      if ($con->query($sql) === TRUE) {
    echo "New Contact Added successfully";
    
    echo "<br><a class=\"btn btn-primary\" href=\"settingsload.php\" role=\"button\">Back</a> ";
           } 
    else 
    {
    echo "Error: " . $sql . "<br>" . $con->error;
    echo "<br><a class=\"btn btn-primary\" href=\"settingsload.php\" role=\"button\">Settings</a> ";
    }

$con->close();
        
?>  
</html>