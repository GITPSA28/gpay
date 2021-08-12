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
    <script type="text/javascript" src="js/jquery.js"></script>

    <link rel="icon" href="https://www.google.com/favicon.ico" type="image/gif" sizes="16x16"> 
<script type="text/javascript" src="js/qrcode.js"></script>
                
</head>




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
<img class="rounded-circle list-inline-item" src="emmawatsondp.jpg" width="40" height="40" class="">

<form class="list-inline-item" name="myform" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
   <select name="users"  class="form-control" id="users"   onchange="myform.submit();">
  <option value="">Select USER</option>
<?php
while($row = mysqli_fetch_array($result)) {
  echo "<option value=\"" . $row[0] . "\">";
  echo "" . $row[0] . "</option>";
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
       <div class="topnav d-flex justify-content-center">
       
        
        <a href="activity.php" >Activity</a>
        <a href="payments.html" class="">Payment methods</a>
        <a href="send.html" >Tranfer Money</a>
        <a href="register.html">Register</a>
        <a href="settingsload.php" class="active">Settings</a>
        
       </div>
    </span>
   

    



    <?php
 
   

$con = mysqli_connect('localhost','root','','gpay');
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}
mysqli_select_db($con,"ajax_demo");
$sql="SELECT *  FROM profile WHERE pid='".$q."'";
$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)) {
    
    $pid= $row['pid'];
    $name=$row['name'];
    $country= $row['country'];
    $atype= $row['atype'];
    $tax=$row['tax'];
    $add= $row['address'];
    $lang=$row['lang'];
   $balance= $row['balance'];
   $sum=0;
   $z=$balance+$sum;
  }
mysqli_close($con);
?>





    <div class="container mt-3">

        <div class="row">
            <div class="col col-lg-1"></div>
            <div class="card col-lg-10 align-items:center mb-4 mt-3" >
                <div class="col col-lg-5 mt-4 mb-4">
                    <h4>General settings</h4>
                    <p> <small> These settings apply only to google pay </small> </p>
                </div>

                <div class="container">
                    <div class="row d-flex">
                        <div class="col-lg-1 d-flex " style="max-width: 40px; align-items: left; margin-left: 0%;"> 
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            </div>    
                        </div>
                            <div class="col-lg-10 " > 
                                <div><h6 style="align-items: left;">Email Updates</h6> </div>
                                <div><p > <small class="text-muted">Get invites to give feedback, exclusive offers, and tips from Google Pay</small></p></div>
                            </div>
                    </div>
                </div>

            </div>
        </div>
        
        <div class="row">

        
                <div class="col col-lg-1"></div>
                <div class="card col-lg-5 align-items:center mb-4 mt-3" >
                    <div class="col col-lg-12 mt-4 mb-4" style="background-color: ; color:;">
                    <br>    
                    <h4 >BALANCE</h4>
                        <h1 style="color:dodgerblue">$ <?="{$z}"  ?></h1>
                    </div>
                </div>
                <div class="card col-lg-5 align-items:center mb-4 mt-3" >
                    <div class="col col-lg-10 mt-4 " style="background-color: ; color:;">
                    <form target="_blank" action="addcontact.php" method="POST">
                        <h4 >ADD contact</h4>
                        <div class="row">
                            <div class="col col-lg-10 " >
                            <input type="text" hidden name="userid" value="<?="{$pid}" ?>" id="userid">
                            <p><input required type="text" id="cntname" class="form-control" placeholder="Enter Contact Name" name="cntname"></p>
                            <p><input required type="text" id="phno" class="form-control" placeholder="Enter phone number" name="phno"></p>
                            </div>
                            <div class="col col-lg-2 " >
                                <br>
                                <input type="submit" value="Add"  class="btn btn-primary" >
                           </div>
                        </div>
                        
                       </form>
                    </div>
                </div>
        </div>
        <div class="row">

        
                <div class="col col-lg-1"></div>
                
        </div>
        

        <div class="row">
            <div class="col col-lg-1"></div>
             <div class="card col-lg-10 mb-5 align-items:center" >
                <div class="col col-lg-5 mt-4 mb-4" >
                    <h4>Payment Profile</h4>
                    </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-1" style="max-width: 50px;">  <i class="fas fa-user-circle fa-color-red fa-lg" style="color:#8b8b8b; "></i> </div>
                            <div class="col-lg-10 " > <h6 style="align-items: left;">Payments profile ID</h6>
                                <p > <small class="text-muted"> <?="{$pid}" ?>  </small></p>
                               
                            </div>
                            
                    </div>
                </div>
                
                <div class="container">
                    <div class="row">
                        <div class="col-lg-1" style="max-width: 50px;">  <i class="fas fa-qrcode fa-color-red fa-lg" style="color:#8b8b8b; "></i> </div>
                            <div class="col-lg-10 " > <h6 style="align-items: left;">Profile QR ID</h6>
                                
                                <form onsubmit="generate();return false;">
                                    <input type="text" hidden id="qr" value="<?="{$pid}" ?> ">
                                    <input type="submit" value="Show QR Code" name="Generate" class="btn btn-primary">
                                </form>
                            <div id="qrResult" style="height: 100px;width: 100px">
                                
                            </div>
                            
                    </div>
                </div>
                <br>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-1" style="max-width: 50px;">  <i class="fas fa-address-card fa-lg" style="color:#8b8b8b;"></i> </div>
                            <div class="col-lg-10"> <h6 style="align-items: left;">Country/Region</h6>
                                <p > <small class="text-muted"> <?="{$country}" ?>  </small></p>
                            </div>
                    </div>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-lg-1" style="max-width: 50px;">  <i class="fas fa-map fa-lg" style="color:#8b8b8b;"></i> </div>
                            <div class="col-lg-10"> <h6 style="align-items: left;">Account type</h6>
                                <p > <small class="text-muted"><?="{$atype}" ?> </small></p>
                            </div>
                    </div>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-lg-1" style="max-width: 50px;">  <i class="fas fa-list-alt fa-lg" style="color:#8b8b8b;"></i> </div>
                            <div class="col-lg-10"> <h6 style="align-items: left;">India tax info  </h6>
                                <p > <small class="text-muted"> Tax status:<?="{$tax}" ?> </small></p>
                            </div>
                    </div>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-lg-1" style="max-width: 50px;">  <i class="fas fa-building fa-lg" style="color:#8b8b8b;"></i> </div>
                            <div class="col-lg-10"> <h6 style="align-items: left;">Name and address </h6>
                                <p > <small class="text-muted"> <?="{$name}" ?> <br> <?="{$add}" ?> </small></p>
                            </div>
                    </div>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-lg-1" style="max-width: 50px;">  <i class="fas fa-globe fa-lg" style="color:#8b8b8b;"></i> </div>
                            <div class="col-lg-10"> <h6 style="align-items: left;">Document language preference  </h6>
                                <p > <small class="text-muted"><?="{$lang}" ?> </small></p>
                            </div>
                    </div>
                </div>

        
    </div>
    </div>
</div>
<div id="qrResult" style="height: 100px;width: 100px">
	
<script type="text/javascript">
	var qrcode=new QRCode(document.getElementById('qrResult'),{
		width:100,
		height:100
	});
    function generate(){
	var message=document.getElementById('qr');
	if(!message.value){
		alert("Input a text");
		message.focus();
		return;
	}

	qrcode.makeCode(message.value);
}

</script>
</body>
</html>