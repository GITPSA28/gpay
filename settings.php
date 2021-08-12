<!DOCTYPE html>
<html lang="en">
    <!-- Image and text -->
    <link href="fontawesome/css/all.css" rel="stylesheet">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="styles" href="css/own.css">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GPAY</title>
</head>



<script>
function showUser(str) {
  if (str == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET","settingsload.php?q="+str,true);
    xmlhttp.send();
  }
}
</script>

<style>
   
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
        
      border-bottom: 3px solid dodgerblue;
    }
    
    .topnav a.active {
      color: rgb(15, 134, 253);
      border-bottom: 3px solid dodgerblue;
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
?>


  <form >
<select name="users" onchange="showUser(this.value)">
  <option value="">Select a person:</option>
<?php
while($row = mysqli_fetch_array($result)) {
  echo "<option value=\"" . $row['pid'] . "\">";
  echo "" . $row['name'] . "</option>";
}



?>
  </select>
</form>
        </div>
       
    </nav>
</body>
</html>