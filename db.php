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
      // echo "Opened database successfully\n";
      // echo'test';
      $sql ="
         CREATE TABLE IF NOT EXISTS Log_info 
         (Role       VARCHAR(50)    ,
         F_Name      VARCHAR(50)   ,
         L_Name       VARCHAR(50)   ,
         Email        VARCHAR(50)  UNIQUE ,
         Phone        VARCHAR(50)  ,
         Pwd     VARCHAR(50)  ,                     
         DOB          DATE       ,
         Fam_Code     VARCHAR(50)   ,
         Em_Cont      INT        ,
         Relation    VARCHAR(50)   ,
         Group1       VARCHAR(50)   ,
         Add_Date          DATE,   
         Approval       VARCHAR(50)    );
         
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
         DOB               DATE           ,
         Comment           VARCHAR(500)   ,
         ADMITTED          VARCHAR(50)    ,
         fam_code          VARCHAR(50)    
         );

         CREATE TABLE IF NOT EXISTS Emp_INFO
         (Role             VARCHAR(50)    ,
         Emp_ID1                INT            ,
         Name_1              VARCHAR(50)    ,
         Salary            FlOAT          ,
         Emp_ID            INT            ,
         New_Salary        FLOAT          
         );

         CREATE TABLE IF NOT EXISTS Roster
         (Role             VARCHAR(50)    ,
         Supervisor_fname        VARCHAR(50)    ,
         Doctor_fname           VARCHAR(50)    ,
         Caregiver_group1_fname        VARCHAR(50)    ,
         Caregiver_group2_fname        VARCHAR(50)    ,
         Caregiver_group3_fname        VARCHAR(50)    ,
         Caregiver_group4_fname        VARCHAR(50)    ,
         Date_R            DATE           
         );

         CREATE TABLE IF NOT EXISTS Admin_home 
         (Role          VARCHAR(50)    ,
         AdminDate      DATE           ,
         PatientName    VARCHAR(50)    ,
         DocName        VARCHAR(50)    ,
         DocAppointment VARCHAR(50)    ,
         CareName       VARCHAR(50)    ,
         MorningMed     VARCHAR(50)    ,
         AfternoonMed   VARCHAR(50)    ,
         NightMed       VARCHAR(50)    ,
         Breakfast      VARCHAR(50)    ,
         Lunch          VARCHAR(50)    ,
         Dinner         VARCHAR(50)   ,
      );



      
      "

      ;
      // $ret = pg_query($db, $sql);
      // if(!$ret) {
      //    echo pg_last_error($db);
      // } else {
      //    echo "Table created successfully\n";
      // }
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



// UPDATE table_name
// SET column1 = value1, column2 = value2...., columnN = valueN
// WHERE [condition];
// example of update query for when admin has to assign a role in the role.php file\
?>