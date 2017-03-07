<?php 
 if($_SERVER['REQUEST_METHOD']=='GET'){
 
 //Getting values
 $sql = $_GET['query'];

  
 //Importing our db connection script
 require_once('dbConnect.php');
 
 //Executing query to database
 if($r=mysqli_query($con,$sql)){
   while($row = mysqli_fetch_array($r, MYSQL_ASSOC)) {
      	$abc['ex'][]=$row;
   }
echo json_encode($abc);
 }else{
 echo 'Query not executed';
 }
 
 //Closing the database 
 mysqli_close($con);
 }