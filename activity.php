<!DOCTYPE html>
<html lang="en">
    <!-- Image and text -->

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="styles" href="css/own.css">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GPAY</title>
    
    <link rel="icon" href="https://www.google.com/favicon.ico" type="image/gif" sizes="16x16"> 
</head>
<style>
 
.my-form
{
    padding-top: 1.5rem;
    padding-bottom: 1.5rem;
}

.my-form .row
{
    margin-left: 0;
    margin-right: 0;
}

.login-form
{
    padding-top: 1.5rem;
    padding-bottom: 1.5rem;
}

.login-form .row
{
    margin-left: 0;
    margin-right: 0;
}
    .topnav {
        
      overflow: hidden;
      background-color: white;
      border-bottom: 0.5px solid lightgray;
    }
    
    .topnav a {
       
      float: left;

      justify-content: center;
      display: block;
      color: black;
      text-align: center;
      padding: 8px 18px;
      text-decoration: none;
      font-size: 17px;
      border-bottom: 3px solid transparent;
    }
    
    .topnav a:hover {
        background-color: whitesmoke;
        
      border-bottom: 3px solid royalblue;
    }
    .topnav a.active:hover
    {
        background-color: rgba(226, 238, 255, 0.788);
    }
    .topnav a.active {
      color: royalblue;
      border-bottom: 3px solid royalblue;
    }
    </style>
<body>
    <nav class="navbar navbar-light ">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="googlelogo_clr_74x24px.svg" alt="" width="80" height="35" class="d-inline-block align-top">
           <span style="color:dimgray;">payments center</span>
          </a>

          <?php
$con = mysqli_connect('localhost','root','','gpay');
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}
mysqli_select_db($con,"gpay");
$sql="SELECT pid , name  FROM profile";
$result = mysqli_query($con,$sql);
$q=1;
?>

<div class="inline">
<!-- <img class="rounded-circle list-inline-item" src="emmawatsondp.jpg" width="40" height="40" class=""> -->

<form class="list-inline-item" name="myform" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
   <select name="users"  class="form-control" id="users"   onchange="myform.submit();">
   

  <option value="">Select USER</option>
<?php
while($row = mysqli_fetch_array($result)) {
  echo "<option value=\"" . $row['pid'] . "\">";
  echo "" . $row['name'] . "</option>";
}

if (isset($_POST['users'])) {
   $q= $_POST['users'];
}
?>  

  </select>
</form>
</div>
  </select>



        </div>
      </nav>
      <span style="align-items: center;">
      <div class="topnav d-flex justify-content-center ">
       
        
        <a href="Activity.php"class="active"  >Activity</a>
        <a href="payments.html" >Payment methods</a>
        <a href="send.html" >Tranfer Money</a>
        <a href="register.html">Register</a>
        <a href="settingsload.php">Settings</a>
        
      </div>
    </span>

    <div class="row mt-5">
    <div class="col-1"></div>
   <div class="col col-10" style="border-style: groove; border-color: whitesmoke;">
    <table class="table">
        <thead>
          <tr>
            <th scope="col" class="col-2">TRANSACTION ID</th>
            <th scope="col">DATE AND TIME</th>
            <th scope="col">FROM</th>
            <th scope="col">TO</th>
            <th scope="col">AMOUNT</th>
            <th scope="col">STATUS</th>
            
          </tr>
        </thead>
        <tbody>


            <?php      
$host = "localhost";  
$user = "root";  
$password = '';  
$db_name = "gpay";  

$con = mysqli_connect($host, $user, $password, $db_name);  
if(mysqli_connect_errno()) {  
    die("Failed to connect with MySQL: ". mysqli_connect_error());  
}        

        $sql = "select *from activity WHERE fromid = ".$q." or toid = ".$q."";  
        $result = mysqli_query($con, $sql);  

        if ($result->num_rows > 0) 
         {
            // output data of each row
            while($row = $result->fetch_assoc()) 
            {
              echo "<tr>";
              $sts=$row['status'];
              if($sts=='Succesfull')
              {
                echo "<th scope=\"row\">".$row['id']."</th> <td>".$row['time']."</td> <td>" .$row["fromid"]. "</td>  <td> " .$row["toid"]. " </td> <td> $" .$row["amt"]. "</td> <td class=\"\" style=\"color:rgb(66,195,88)\"> ".$row["status"]."<br>";
              }
              elseif($sts=='Bonus Credited')
              {
                echo "<th scope=\"row\">".$row['id']."</th> <td>".$row['time']."</td> <td>" .$row["fromid"]. "</td>  <td> " .$row["toid"]. " </td> <td> $" .$row["amt"]. "</td> <td class=\"\" style=\"color:rgb(255,191,0)\"> ".$row["status"]."<br>";
              }
              else{

              
              echo "<th scope=\"row\">".$row['id']."</th> <td>".$row['time']."</td> <td>" .$row["fromid"]. "</td>  <td> " .$row["toid"]. " </td> <td> $" .$row["amt"]. "</td> <td style=\"color:rgb(255,58,49)\"> ".$row["status"]."<br>";
            }
              echo "</tr>";
                    }
          }
           else
         {
            echo "0 Transactions in this account";
          }

          $con->close();
?>  
        </tbody>
      </table>
    </div>
</div>
</body>
</html>