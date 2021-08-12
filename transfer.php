<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
  <link rel="icon" href="https://www.google.com/favicon.ico" type="image/gif" sizes="16x16"> 
</head>


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
if($amt>149)
{
  if($bns==0)
  {
    $bt="Better Luck Next Time";
  }
  else{
    $bt=$bns;
  }
}
else{
  $bns=0;
}

$sql="SELECT balance  FROM profile WHERE pid='$from' AND pin='$pin'";
$result = mysqli_query($con,$sql);
if($row = mysqli_fetch_array($result)) {
$balance= $row['balance'];

$fb=$balance-$amt;
           
$min=0;
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
      $fb=$fb+$bns;
        $sql = "UPDATE profile SET balance='$fb' WHERE pid='$from'"; 

    if ($con->query($sql) === TRUE) {
        echo "Amount Debited Successfully <br>";
        if($bns>0)
        {
          
        $sql="INSERT INTO `activity` (`fromid`, `toid`, `amt`, `status`, `id`) VALUES ('$from', '$to', '$bns', 'Bonus Credited', NULL) ";
        if ($con->query($sql) === TRUE) {
          echo "Bonus credited Sucesfully<br>";
          
      }
        }
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



<body>

<div id="bdiv" class="container" <?php if($amt<150) echo "hidden"?>>
  <h2>Bonus card</h2>
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open card</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        
        <div class="modal-body">
          <h2 id="prize"><?="{$bt}" ?></h2>
        </div>
        <div class="modal-footer" style="text-align: center;">
          <button type="button" class="btn btn-default" data-dismiss="modal">Done</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>


</script>
</body>
</html>
