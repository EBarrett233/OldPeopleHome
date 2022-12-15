<!DOCTYPE html>
<link rel="stylesheet" type="text/css" href="patient_home.css" />
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
</head> -->
<form>
    <h1>Patient Home</h1>
    <div class="container">
<?php
session_start();


    require('db.php');
    $db=db_connect($host,$port,$dbname,$credentials);
    $sql="SELECT * FROM Patients_Home WHERE patients_id =".$_SESSION["id"] ;
   
    $ret= pg_query($db, $sql);
    $rows = pg_fetch_all($ret);
        // print_r($rows[0]['email']);
        foreach ($rows as $row) {
            echo 'Patients ID:'.$row ['patients_id'].'<br>';
            echo 'Date:'.$row ['date_p'].'<br>';
            echo 'Patient Name:'.$row ['patients_name'].'<br>';
            echo 'Doctor Name:'.$row ['doc_name'].'<br>';
            echo 'Doctor Apoitment:'.$row ['doc_app'].'<br>';
            echo 'Caregiver name:'.$row ['care_name'].'<br>';
            echo 'Morning Medicine:'.$row ['mor_med'].'<br>';
            echo 'Afternoon Medicine:'.$row ['aft_med'].'<br>';
            echo 'Night Medicine:'.$row ['night_med'].'<br>';
            echo 'Breakast:'.$row ['breakast'].'<br>';
            echo 'Lunch:'.$row ['lunch'].'<br>';
            echo 'Dinner:'.$row ['dinner'].'<br>';
            echo 'Admition Date:'.$row ['adm_date'].'<br>';
        }
?>

    </div>
</form>