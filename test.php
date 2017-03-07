<?php
   $dbhost = 'mysql.hostinger.in';
   $dbuser = 'u335246983_winos';
   $dbpass = "123456";
 $dbname="u335246983_winos";

   
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   
   $sql = 'SELECT * FROM owner_details';
   mysql_select_db($dbname);
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
   
   while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
      echo "{$row} ";
   }
   
   echo "Fetched data successfully\n";
   
   mysql_close($conn);
?>