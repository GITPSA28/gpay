
<?php      

$host = "localhost";  
$user = "root";  
$password = '';  
$db_name = "gpay";  

$con = mysqli_connect($host, $user, $password, $db_name);  
if(mysqli_connect_errno()) {  
    die("Failed to connect with MySQL: ". mysqli_connect_error());  
}  
$from= $_POST['from'];
$to = $_POST['to'];
$pin = $_POST['pin'];
$amt= $_POST['amt'];
$bns= $_POST['bonus'];
$sql="SELECT balance  FROM profile WHERE pid='$from' AND pin='$pin'";
$result = mysqli_query($con,$sql);
if($row = mysqli_fetch_array($result)) {
$balance= $row['balance'];

$fb=$balance-$amt;
           
$min=0;
echo $bns;
if($fb<$min)
{
    $sql="INSERT INTO `activity` (`fromid`, `toid`, `amt`, `status`, `id`) VALUES ('$from', '$to', '$amt', 'INSUFFICIENT BALANCE', NULL) ";

    if ($con->query($sql) === TRUE) {
        echo "Record inserted Succesfully <br>";
        
    }
    echo "INSUFFICIENT BALANCE";
}

else
    {
        $sql = "UPDATE profile SET balance='$fb' WHERE pid='$from'"; 

    if ($con->query($sql) === TRUE) {
        echo "Amount Debited Successfully <br>";
    }
    else 
    {
        echo "Error: " . $sql . "<br>" . $con->error;
    }

    $sql="SELECT balance  FROM profile WHERE pid='".$to."'";
    $result = mysqli_query($con,$sql);

    while($row = mysqli_fetch_array($result)) {
    $balance= $row['balance'];
    $tb=$balance+$amt;
    }         


    $sql = "UPDATE profile SET balance='$tb' WHERE pid='$to'"; 

    if ($con->query($sql) === TRUE) {
        echo "Amount credited Successfully <br>";
        
        $sql="INSERT INTO `activity` (`fromid`, `toid`, `amt`, `status`, `id`) VALUES ('$from', '$to', '$amt', 'Succesfull', NULL) ";

        if ($con->query($sql) === TRUE) {
            echo "Record inserted Succesfully <br>";
            
        }
    }
    else
    {
        echo "Error: " . $sql . "<br>" . $con->error;
    }
}
}
else{

    $sql="INSERT INTO `activity` (`fromid`, `toid`, `amt`, `status`, `id`) VALUES ('$from', '$to', '$amt', 'Pin ERROR', NULL) ";

        if ($con->query($sql) === TRUE) {
            echo "Record inserted Succesfully <br>";
            
        }

    echo " pin error";
}
echo "<a href=\"settingsload.php\" > go to profile</a>";
$con->close();
       
?>  

