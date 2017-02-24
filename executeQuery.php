<?php
define('HOST','mysql.hostinger.in');
define('USER','u335246983_winos');
define('PASS','bhaq2010');
define('DB','u335246983_winos');
 
$con = mysqli_connect(HOST,USER,PASS,DB);
 
$sql = "select * from teacherDetails;
 
$res = mysqli_query($con,$sql);
 
$result = array();
 
while($row = mysqli_fetch_array($res)){
array_push($result,
array('id'=>$row[0],
'name'=>$row[1],
'address'=>$row[2]
));
}
 
echo json_encode(array($result));
 
mysqli_close($con);
 
?>