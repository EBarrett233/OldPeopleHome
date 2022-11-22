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
      echo'test';
      $sql ="
         CREATE TABLE IF NOT EXISTS test1 
         (ID INT PRIMARY KEY     NOT NULL,
         test2           TEXT    NOT NULL,
         test3            INT     NOT NULL,
         test4        CHAR(50),
         test5         REAL);

         INSERT INTO test1 (ID,test2,test3,test4,test5)
         VALUES (1, 'Paul', 32, 'California', 20000.00 );
      ";
      $ret = pg_query($db, $sql);
      if(!$ret) {
         echo pg_last_error($db);
      } else {
         echo "Table created successfully\n";
      }
      }

      pg_close($db);
?>
