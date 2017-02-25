<?php 
 if($_SERVER['REQUEST_METHOD']=='GET'){
 
 //Getting values
 $sql = $_GET['query'];
 
 //Importing our db connection script
 require_once('dbConnect.php');
 
 //Executing query to database
 if(mysqli_query($con,$sql)){
 echo 'Query executed';
 }else{
 echo 'Query not executed';
 }
 
 //Closing the database 
 mysqli_close($con);
 }