<?php
   $host        = "host = 127.0.0.1";
   $port        = "port = 5432";
   $dbname      = "dbname = Old_People";
   $credentials = "user = daneshaut password=Dane#5503";

   $db = pg_connect( "$host $port $dbname $credentials"  );
   if(!$db) {
      echo "Error : Unable to open database\n";
   } else {
      echo "Opened database successfully\n";
   }
pg_close($db)
// connection to the db just change the $credintals to your own user and password
?>

