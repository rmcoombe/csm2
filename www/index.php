<!DOCTYPE html>
<html lang="en">
<title>NIO Tyre App</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="sweetalert-master/dist/sweetalert.min.js"></script>
<script src="https://api.backendless.com/sdk/js/latest/backendless.min.js"></script>
<script src="js/index.js" type="text/javascript"></script>
<script src="js/script.js" type="text/javascript"></script>
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}
</style>
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-blue-grey w3-card w3-left-align w3-small">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-left w3-padding-large w3-hover-white w3-large w3-blue-grey" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="home.html" class="w3-bar-item w3-button w3-padding-large w3-blue-grey"><i class="fa fa-home fa-2x w3-padding-10 w3-text-white"></i></a>
    <a href="viewSets.html" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">View Sets</a>
    <a href="updatSet.html" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Update Set</a>
    <a href="clear.html" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Clear</a>
    <a href="replace.html" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Replace or Add Wheel</a>

  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
    <a href="viewSets.html" class="w3-bar-item w3-button w3-padding-large">View Sets</a>
    <a href="updateSet.html" class="w3-bar-item w3-button w3-padding-large">Update Set</a>
    <a href="clear.html" class="w3-bar-item w3-button w3-padding-large">Clear</a>
    <a href="replace.html" class="w3-bar-item w3-button w3-padding-large">Replace or Add Wheel</a>

  </div>
</div>
<?php 
$host = "localhost";
$user = "root";
$pass = "";
$db = "testing";
 
$conn = mysqli_connect($host,$user,$pass, $db);
if(!$conn)
{
  die("Connection failed: " . mysqli_connect_error());
}
 
?>
 
<?php 
  $sql = "select * from tbl_employee where EmployeeID = 3200";
  $rs = mysqli_query($conn, $sql);
  //get row
  $fetchRow = mysqli_fetch_assoc($rs);
?> 
 
 
 
<!DOCTYPE html>
<html>
<head>  
<title> Retrieve data from database and display in php form</title>
 
<style>
  body{
    font-family:verdana;
  }
  .container{width:500px;margin: 0 auto;}
  h3{line-height:20px;font-size:20px;}
  input{display:block;width:350px;height:20px;margin:10px 0;}
  textarea{display:block;width:350px;margin:10px 0;}
  button{background:green; border:1px solid green;width:70px;height:30px;color:#ffffff}
</style>
 
 
</head> 
<body>
 
  <i>Name:</i><i><?php echo $fetchRow['name']?></i>
  



</body>
<script>
// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}





</script>


</html>
