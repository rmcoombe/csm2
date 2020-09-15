<?php
include "db.php";
if (isset($_GET['cm'])) {
    $cm = $_GET['cm'];
} else {
    $cm = "9999999";
}
$data=array();
$q=mysqli_query($con, "select * from `tbl_employee` WHERE EmployeeID = $cm"); 
while ($row=mysqli_fetch_object($q)){
    $data[]=$row; 
}
echo json_encode($data); 
?>