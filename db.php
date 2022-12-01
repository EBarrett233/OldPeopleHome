<?php

   $host        = "host = 127.0.0.1";
   $port        = "port = 5432";
   $dbname      = "dbname = Old_People";
   $credentials = "user = daneshaut password=Dane#5503";

   function db_connect($host,$port,$dbname,$credentials){
      return pg_connect( "$host $port $dbname $credentials"  );
   }
   $db = pg_connect( "$host $port $dbname $credentials"  );
   if(!$db) {
      echo "Error : Unable to open database\n";
   } else {
      echo "Opened database successfully\n";
      echo'test';
      $sql ="
         CREATE TABLE IF NOT EXISTS Log_info 
         (Role       VARCHAR(50)    ,
         F_Name      VARCHAR(50)   ,
         L_Name       VARCHAR(50)   ,
         Email        VARCHAR(50)   ,
         Phone        VARCHAR(50)  ,
         Pwd     VARCHAR(50)  ,                     
         DOB          DATE       ,
         Fam_Code     VARCHAR(50)   ,
         Em_Cont      INT        ,
         Relation    VARCHAR(50)   ,
         Group1       VARCHAR(50)   ,
         Add_Date          INT   );
         
         CREATE TABLE IF NOT EXISTS Doctors_App 
         (Role             VARCHAR(50)    ,
         Patient_ID        VARCHAR(50)    ,            
         Date_App          DATE           ,
         Doctor            VARCHAR(50)    ,
         Pat_Name          VARCHAR(50)    ,
         Comment           VARCHAR(50)    ,
         Morning_Meds      VARCHAR(50)    ,
         Afternoon_Meds    VARCHAR(50)    ,
         Night_Meds        VARCHAR(50)    
         );

         CREATE TABLE IF NOT EXISTS Admin_Con
         (Role             VARCHAR(50)    ,
         New_Role          VARCHAR(50)    ,
         Access_Level      VARCHAR(50)    ,
         Patient_ID        VARCHAR(50)    ,
         Total_Due         FLOAT          ,
         New_Pay           FLOAT          ,
         Pay_Date          DATE           
         );

         CREATE TABLE IF NOT EXISTS Patients_Home
         (Role             VARCHAR(50)    ,
         Patients_ID       VARCHAR(50)    ,
         Date_P            DATE           ,
         Patients_Name     VARCHAR(50)    ,
         Doc_Name          VARCHAR(50)    ,
         Doc_App           VARCHAR(50)    ,
         Care_Name         VARCHAR(50)    ,
         Mor_Med           VARCHAR(50)    ,
         Aft_Med           VARCHAR(50)    ,
         Night_Med         VARCHAR(50)    ,
         Breakast          VARCHAR(50)    ,
         Lunch             VARCHAR(50)    ,
         Dinner            VARCHAR(50)    ,
         Adm_Date          DATE           ,
         Age               INT            ,
         ADMITTED          VARCHAR(50)    
         );

         CREATE TABLE IF NOT EXISTS Emp_INFO
         (Role             VARCHAR(50)    ,
         Emp_ID1                INT            ,
         Name              VARCHAR(50)    ,
         Salary            FlOAT          ,
         Emp_ID            INT            ,
         New_Salary        FLOAT          
         );

         CREATE TABLE IF NOT EXISTS Roster
         (Role             VARCHAR(50)    ,
         Supervisor        VARCHAR(50)    ,
         Doctor            VARCHAR(50)    ,
         Caregiver         VARCHAR(50)    ,
         Group_R            VARCHAR(50)    ,
         Date_R            DATE           
         );

         INSERT INTO Log_info(Role,F_Name,L_Name,Email,Phone,Pwd,DOB)
         VALUES('Admin','Dane','Shaut','admin@admin.com','7173810995','admin77','2003-05-05');

      "

      ;
      $ret = pg_query($db, $sql);
      if(!$ret) {
         echo pg_last_error($db);
      } else {
         echo "Table created successfully\n";
      }
      }
   // write $test function and use include or required on seprate files to keep the db functions on this page to transfer to other pages when the time comes
      pg_close($db);
      
?>

<?php
//    $host        = "host = 127.0.0.1";
//    $port        = "port = 5432";
//    $dbname      = "dbname = Old_People";
//    $credentials = "user = daneshaut password=Dane#5503";

//    $db = pg_connect( "$host $port $dbname $credentials"  );
//    if(!$db) {
//       echo "Error : Unable to open database\n";
//    } else {
//       echo "Opened database successfully\n";
//    }

//    $sql ="
//       INSERT INTO Roster (Role,Supervisor,Doctor,Caregiver,Group_R,Date_R)
//       VALUES ('test','test','test','test','test','2001-01-01');

// "
// ;
//    $ret = pg_query($db, $sql);
//    if(!$ret) {
//       echo pg_last_error($db);
//    } else {
//       echo "Records created successfully\n";
//    }
//    pg_close($db);
?>