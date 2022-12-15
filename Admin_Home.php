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
    <?php
    require('db.php');
    $db=db_connect($host,$port,$dbname,$credentials);
    $num=0;
    $sql="SELECT Role,F_Name,L_Name FROM Patients_Home WHERE mor_med ='no' OR aft_med ='no' OR night_med ='no' OR breakast='no' OR lunch='no' OR dinner='no' ";
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
        foreach ($rows as $row) {
            echo'<br>';
            echo $row ['patients_name'].' morning medicine is '.$row ['mor_med'].'<br>';
            echo'<br>';
            echo $row ['patients_name'].' Afternoon medicine is '.$row ['aft_med'].'<br>';
            echo'<br>';
            echo $row ['patients_name'].' Night medicine is '.$row ['night_med'].'<br>';
            echo'<br>';
            echo $row ['patients_name'].' Breakfeast is'.$row ['breakast'].'<br>';
            echo'<br>';
            echo $row ['patients_name'].' lunch is '.$row ['lunch'].'<br>';
            echo'<br>';
            echo $row ['patients_name'].' dinner is '.$row ['dinner'].'<br>';
            echo'<br>';
        }
?>
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