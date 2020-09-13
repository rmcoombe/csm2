<?php
include "db.php"; 
$data=array(); 
$q=mysqli_query($con, "select * from `tbl_employee` WHERE EmployeeID = '403'"); 
while ($row=mysqli_fetch_object($q)){
    $data[]=$row; 
}
echo json_encode($data); 
?>