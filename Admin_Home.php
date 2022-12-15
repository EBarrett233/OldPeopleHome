<!DOCTYPE html>
<link rel="stylesheet" type="text/css" href="Admin_Home.css" />
<head>
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
    <h1>Admin Page</h1>
    <div class="container">
    <label for="AdminDate"><b>Date:</b></label>
    <input type="date" placeholder="Date" name="AdminDate">
    <!-- <button type="submit" class="adminbtn"><strong>Missed Patient Activity</strong></button> -->
    <label for="PatientName"><b>Patient Name:</b></label>
    <input type="text" placeholder="Name" name="PatientName">
    <label for="DocName"><b>Docter Name:</b></label>
    <input type="text" placeholder="Name" name="DocName">
    <label for="DocAppointment"><b>Docter Appointment:</b></label>
    <input type="text" placeholder="Appointment" name="DocAppointment">
    <label for="CareName"><b>Caregiver Name:</b></label>
    <input type="text" placeholder="Name" name="CareName">

    </div>
    <div class="container">
    <label for="MorningMed"><b>Morning Medicine:</b></label>
    <input type="text" placeholder="Med" name="MorningMed">
    <label for="AfternoonMed"><b>Afternoon Medicine:</b></label>
    <input type="text" placeholder="Med" name="AfternoonMed">
    <label for="NightMed"><b>Night Medicine:</b></label>
    <input type="text" placeholder="Med" name="NightMed">
    <label for="Breakfast"><b>Breakfast:</b></label>
    <input type="text" placeholder="food" name="Breakfast">
    <label for="Lunch"><b>Lunch:</b></label>
    <input type="text" placeholder="food" name="Lunch">
    <label for="Dinner"><b>Dinner:</b></label>
    <input type="text" placeholder="food" name="Dinner">
    </div>

    <h1>New Employee Info</h1>
<div class="container">
    <label for="EmpID"><b>ID:</b></label>
    <input type="text" placeholder="ID" name="EmpID">
    <label for="Salary"><b>Salary:</b></label>
    <input type="text" placeholder="Salary" name="Salary">
    <button name ="submit" type="submit" class="adminbtn"><strong>add info</strong></button>
</div>
</form>    
<?php
require("db.php");
if (isset($_POST['submit'])) {
    
        // $AdminDate=$_POST['AdminDate'];
        $name=$_REQUEST['PatientName'];
        $DocName=$_REQUEST['DocName'];
        $DocAppointment=$_REQUEST['DocAppointment'];
        $CareName=$_REQUEST['CareName'];
        $morning=$_REQUEST['MorningMed'];
        $afternoon=$_REQUEST['AfternoonMed'];
        $nights=$_REQUEST['NightMed'];
        $breakast=$_REQUEST['Breakfast'];
        $lunch=$_REQUEST['Lunch'];
        $dinner=$_REQUEST['Dinner'];
        
        // $rows=pg_fetch_all($ret);
        $Current_Date=date("Y-m-d");
        // foreach($rows as $row){
        //     $R=$row['role'];
        //     if ($_POST['role'] ==$R){
        //         echo'test_post';
        $db=db_connect($host,$port,$dbname,$credentials);
    $sql="INSERT INTO Admin_home (PatientName,DocName,DocAppointment,CareName,MorningMed,AfternoonMed,NightMed,Breakfast,Lunch,Dinner) 
    VALUES  
    ('$name','$DocName','$DocAppointment','$CareName','$morning','$afternoon','$nights','$breakast','$lunch','$dinner');";
    $ret= pg_query($db, $sql);

            // }
        // }
 }
//  '$AdminDate'
?>