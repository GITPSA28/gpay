
<?php
$q = $_REQUEST["q"];
$host = "localhost";  
$user = "root";  
$password = '';  
$db_name = "gpay";  
  
$con = mysqli_connect($host, $user, $password, $db_name);  
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"ajax_demo");
$sql="SELECT contactid,contactname FROM `usercontact` WHERE userid=$q";
$result = mysqli_query($con,$sql);
echo "
<select class=\"form-control\"  name=\"users\" onchange=\"showUser(this.value)\"> ";
echo "<option disabled selected>Contact Name</option>";
while($row = mysqli_fetch_array($result)) {

  echo "<option value=".$row['contactid'].">" . $row['contactname'] . "</option>";

}
echo "</select>";
mysqli_close($con);
?>