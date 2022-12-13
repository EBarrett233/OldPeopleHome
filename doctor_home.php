<!DOCTYPE html>
<link rel="stylesheet" type="text/css" href="Doctor_Appointment.css" />
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
<h1>Doctor Home</h1>
<div class="container">
    <label for="PatientName"><b>Patient Name:</b></label>
    <input type="text" placeholder="Name" name="PatientName"> 
    <label for="AppointDate"><b>Date</b></label>
    <input type="date" placeholder="Date" name="AppointDate">
    <label for="Comment"><b>Comment:</b></label>
    <input type="text" placeholder="Comment" name="Comment">
    <label for="MorningMed"><b>Morning Medicine:</b></label>
    <input type="text" placeholder="Med" name="MorningMed">
    <label for="AfternoonMed"><b>Afternoon Medicine:</b></label>
    <input type="text" placeholder="Med" name="AfternoonMed">
    <label for="NightMed"><b>Night Medicine:</b></label>
    <input type="text" placeholder="Med" name="NightMed">
</div>

<div class="container">
    <label for="tilldate"><b>Date Till:</b></label>
    <input type="date" placeholder="Till Date" name="tilldate">
<button>Submit</button>
    <label for="PatientName"><b>Patient Name:</b></label>
    <input type="text" placeholder="Name" name="PatientName">  
    <label for="AppointDate"><b>Date</b></label>
    <input type="date" placeholder="Date" name="AppointDate">
</div>

<?php
require('db.php');
$admin_user='admin@admin.com';
$admin_pass='admin77';
    $db=db_connect($host,$port,$dbname,$credentials);
    $sql="SELECT * FROM Doctors_App;";
    $ret= pg_query($db, $sql);


    $rows = pg_fetch_all($ret);
    foreach ($rows as $row) {
        echo '<br>'.'Patient ID';
        echo $row ['Patient_ID'].'<br>';
        echo 'Patient ID: '.$row ['role'].'<br>';

        echo '<br>'.'Appointment Date';
        echo $row ['Date_App'].'<br>';
        echo 'Appointment Date: '.$row ['role'].'<br>';

        echo '<br>'.'Comments';
        echo $row ['Comment'].'<br>';
        echo 'Comment: '.$row ['role'].'<br>';

        echo '<br>'.'Morning Meds';
        echo $row ['Morning_Meds'].'<br>';
        echo 'Morning Meds: '.$row ['role'].'<br>';

        echo '<br>'.'Afternoon Meds';
        echo $row ['Afternoon_Meds'].'<br>';
        echo 'Afternoon Meds: '.$row ['role'].'<br>';

        echo '<br>'.'Night Meds';
        echo $row ['Night_Meds'].'<br>';
        echo 'Night Meds: '.$row ['role'].'<br>';
    }
?>