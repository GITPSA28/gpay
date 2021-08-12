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

    $name = $_POST['name'];
    $email = $_POST['email'];
    $country = $_POST['country'];
    $phno = $_POST['phno'];
    $address= $_POST['address']; 
    $balance= $_POST['balance']; 
    $lang=$_POST['lang'];
    $atype=$_POST['atype'];
    $pin =$_POST['pin'];
        $sql = "INSERT INTO profile (name,country,address,balance,email,phno,pin,lang,atype) VALUES ('$name', '$country','$address',$balance,'$email','$phno',$pin,'$lang','$atype')"; 
        
      if ($con->query($sql) === TRUE) {
    echo "New record created successfully";
    
    echo "<br><a class=\"btn btn-primary\" href=\"settingsload.php\" role=\"button\">Settings</a> ";
           } 
    else 
    {
    echo "Error: " . $sql . "<br>" . $con->error;
    echo "<br><a class=\"btn btn-primary\" href=\"settingsload.php\" role=\"button\">Settings</a> ";
    }

$con->close();
        
?>  
</html>