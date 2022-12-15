<!DOCTYPE html>
<link rel="stylesheet" type="text/css" href="Admin_Home.css" />
<!-- <head>
    <div class="title">
    <a href="Additional_Info_for_Patient.php">Patient Info</a>
    <a href="Doctor_Appointment.php">Doctor Appointment</a>
    <a href="role.php">Role</a>
    <a href="Patient_Home.php">Patient Home</a>
    <a href="Roster.php">Current Roster</a>
    <a href="New_Roster">Make a new Roster</a>
    <a href="payment.php">Make a Payment</a>
    <a href="employee.php">Employee</a>
</div>
</head>
<form class="form" method="POST" name="Register" action="#">
    <h1>Caregiver home</h1>
    <div class="container">

    <button type="submit" class="continue"><strong>List of patients duty today </strong></button>
    
    <label for="PatientName"><b>Patient Name:</b></label>
    <input type="text" placeholder="Name" name="PatientName"> 
       
    <label for="MorningMed"><b>Morning Medicine:</b></label>
    <input type="text" placeholder="Med" name="MorningMed">
    <label for="AfternoonMed"><b>Afternoon Medicine:</b></label>
    <input type="text" placeholder="Med" name="AfternoonMed">
    <label for="NightMed"><b>Night Medicine:</b></label>
    <input type="text" placeholder="Med" name="NightMed">
    </div>
    <div class="container">
    <label for="Breakfast"><b>Breakfast:</b></label>
    <input type="text" placeholder="food" name="Breakfast">
    <label for="Lunch"><b>Lunch:</b></label>
    <input type="text" placeholder="food" name="Lunch">
    <label for="Dinner"><b>Dinner:</b></label>
    <input type="text" placeholder="food" name="Dinner">
    </div>
    <button name = "submit"type="submit" class="continue"><strong>OK</strong></button>
    <button type="submit" class="cancle"><strong>Cancle</strong></button>
</form>
    <?php
    require('db.php');
    $db=db_connect($host,$port,$dbname,$credentials);
    $num=0;
    $sql="SELECT Role,F_Name,L_Name FROM Log_info WHERE Role ='patient'";
    $ret= pg_query($db, $sql);
    $rows = pg_fetch_all($ret);
        // print_r($rows[0]['email']);
        
        foreach ($rows as $row) {
            $num+=1;
            echo '<br>'.'Patient  '.$num.') ';
            echo $row ['role'].'<br>';
            echo ' Patients Name: '.$row ['f_name'].'<br>';
            
        }
        $db=db_connect($host,$port,$dbname,$credentials);
        $sql="SELECT Patients_Name,Mor_Med,Aft_Med,Night_Med,Breakast,Lunch,Dinner FROM Patients_Home WHERE Role ='patient'";
        $ret= pg_query($db, $sql);
        $rows = pg_fetch_all($ret);
    ?>

<?php

if (isset($_POST['submit'])) {
    
        $name=$_REQUEST['PatientName'];
        // $DocName=$_REQUEST['DocName'];
        // $DocAppointment=$_REQUEST['DocAppointment'];
        // $CareName=$_REQUEST['CareName'];
        $morning=$_REQUEST['MorningMed'];
        $afternoon=$_REQUEST['AfternoonMed'];
        $nights=$_REQUEST['NightMed'];
        $breakast=$_REQUEST['Breakfast'];
        $lunch=$_REQUEST['Lunch'];
        $dinner=$_REQUEST['Dinner'];
        $Current_Date=date("Y-m-d");
        $db=db_connect($host,$port,$dbname,$credentials);
    $sql="INSERT INTO Admin_home (PatientName,MorningMed,AfternoonMed,NightMed,Breakfast,Lunch,Dinner) 
    VALUES  
    ('$name','$morning','$afternoon','$nights','$breakast','$lunch','$dinner');";
    $ret= pg_query($db, $sql);

    }

?>