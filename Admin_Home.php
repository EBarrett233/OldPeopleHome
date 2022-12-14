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
<form>
    <h1>Admin Page</h1>
    <div class="container">
    <label for="AdminDate"><b>Date:</b></label>
    <input type="date" placeholder="Date" name="AdminDate">
    <button type="submit" class="adminbtn"><strong>Missed Patient Activity</strong></button>
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
    <button type="submit" class="adminbtn"><strong>add info</strong></button>
</div>
    
<?php
$db=db_connect($host,$port,$dbname,$credentials);
    $AdminDate=$_POST['AdminDate'];
    $name=$_POST['PatientName'];
    $DocName=$_POST['DocName'];
    $DocAppointment=$_POST['DocAppointment'];
    $CareName=$_POST['CareName'];
    $morning=$_POST['MorningMed'];
    $afternoon=$_POST['AfternoonMed'];
    $nights=$_POST['NightMed'];
    $breakast=$_POST['Breakfast'];
    $lunch=$_POST['Lunch'];
    $dinner=$_POST['Dinner'];
    
    $rows=pg_fetch_all($ret);
    $Current_Date=date("Y-m-d");
    foreach($rows as $row){
        $R=$row['role'];
        if ($_POST['role'] ==$R){
            echo'test_post';
            
            $sql="INSERT INTO Admin_home (Role,AdminDate,PatientName,DocName,DocAppointment,CareName,MorningMed,AfternoonMed,NightMed,Breakfast,Lunch,Dinner) 
            VALUES  ('$R','$AdminDate','$name','$DocName','$DocAppointment','$CareName','$morning','$afternoon','$nights','$breakast','$lunch','$dinner');";
            $ret= pg_query($db, $sql);

        }
    }

?>