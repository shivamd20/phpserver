<?php
   $dbhost = 'mysql.hostinger.in';
   $dbuser = 'u335246983_winos';
   $dbpass = "123456";
 $dbname="u335246983_winos";

   
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect: ' . mysqli_error());
   }
   
   $sql = 'SELECT * FROM owner_details';
   mysqli_select_db($dbname);
   $retval = mysqli_query( $sql, $conn );
   
   if(! $retval ) {
      die('Could not get data: ' . mysqli_error());
   }
   
   while($row = mysqli_fetch_array($retval, MYSQL_ASSOC)) {
      echo "{$row} ";
   }
   
   echo "Fetched data successfully\n";
   
   mysqli_close($conn);
?>