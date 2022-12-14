<!DOCTYPE html>
<link rel="stylesheet" type="text/css" href="patient_home.css" />
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
<form>
    <h1>Patient Home</h1>
    <div class="container">
<?php
    require('db.php');
    $db=db_connect($host,$port,$dbname,$credentials);
    $sql="SELECT * FROM Patients_Home";
   
    $ret= pg_query($db, $sql);
    $rows = pg_fetch_all($ret);
        // print_r($rows[0]['email']);
        foreach ($rows as $row) {
        
            echo 'Patients ID:'.$row ['Patients_ID'].'<br>';
            echo 'Date:'.$row ['Date_P'].'<br>';
            echo 'Patient Name:'.$row ['Patients_Name'].'<br>';
            echo 'Doctor Name:'.$row ['Doc_Name'].'<br>';
            echo 'Doctor Apoitment:'.$row ['Doc_App'].'<br>';
            echo 'Caregiver name:'.$row ['Care_Name'].'<br>';
            echo 'Morning Medicine:'.$row ['Mor_Med'].'<br>';
            echo 'Afternoon Medicine:'.$row ['Aft_Med'].'<br>';
            echo 'Night Medicine:'.$row ['Night_Med'].'<br>';
            echo 'Breakast:'.$row ['Breakast'].'<br>';
            echo 'Lunch:'.$row ['Lunch'].'<br>';
            echo 'Dinner:'.$row ['Dinner'].'<br>';
            echo 'Admition Date:'.$row ['Adm_Date'].'<br>';
            echo 'Date Of Birth:'.$row ['DOB'].'<br>';
        }
?>

    </div>
</form>