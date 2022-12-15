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
<form class="form" method="POST" name="Register" action="#">
    <h1>Doctor Appointment</h1>
    <div class="container">
    <label for="Patient_ID"><b>Patient ID:</b></label>
    <input type="text" placeholder="ID" name="Patient_ID">
    <label for="Date_App"><b>Date</b></label>
    <input type="date" placeholder="Date" name="Date_App">
    <label for="role"><b>Doctor:</b></label>
    <select name="Doctor" id="Doc">
    <option value="Doctor1">Doctor1</option>
    <option value="Doctor2">Doctor2</option>
    <option value="Doctor3">Doctor3</option>
    <option value="Doctor4">Doctor4</option>
    </select>
    <label for="Pat_Name"><b>Patient Name:</b></label>
    <input type="text" placeholder="Name" name="Pat_Name">
    </div>

    <div class="container">
    <label for="Comment"><b>Comment:</b></label>
    <input type="text" placeholder="ID" name="Comment">
    </div>
    <button name="submit"type="submit" class="continue"><strong>OK</strong></button>
    <!-- <button type="submit" class="cancle"><strong>Cancle</strong></button> -->
    </form>

<?php
// require('db.php');
// $admin_user='admin@admin.com';
// $admin_pass='admin77';
//     $db=db_connect($host,$port,$dbname,$credentials);
//     $sql="SELECT * FROM Doctors_App;";
//     $ret= pg_query($db, $sql);


//     $rows = pg_fetch_all($ret);
//     foreach ($rows as $row) {
//         echo '<br>'.'Patient ID:';
//         echo $row ['Patient_ID'].'<br>';

//         echo '<br>'.'Appointment Date:';
//         echo $row ['Date_App'].'<br>';

//         echo '<br>'.'Doctor:';
//         echo $row ['Doctor'].'<br>';

//         echo '<br>'.'Patient Name:';
//         echo $row ['Pat_Name'].'<br>';

//         echo '<br>'.'Comments:';
//         echo $row ['Comment'].'<br>';

//         echo '<br>'.'Morning Meds:';
//         echo $row ['Morning_Meds'].'<br>';

//         echo '<br>'.'Afternoon Meds:';
//         echo $row ['Afternoon_Meds'].'<br>';

//         echo '<br>'.'Night Meds:';
//         echo $row ['Night_Meds'].'<br>';
//     }
?>

<?php
require('db.php');
if (isset($_REQUEST['submit'])) {
    $patientid=$_REQUEST['Patient_ID'];
    $dateapp=$_REQUEST['Date_App'];
    $doctor=$_REQUEST['Doctor'];
    $name=$_REQUEST['Pat_Name'];
    $comment=$_REQUEST['Comment'];
    // $morning=$_POST['MorningMed'];
    // $afternoon=$_POST['AfternoonMed'];
    // $nights=$_POST['NightMed'];
    $db=db_connect($host,$port,$dbname,$credentials);
    
    $Current_Date=date("Y-m-d");       
            $sql="INSERT INTO Doctors_App (Patient_ID,Date_App,doctor,Pat_Name,Comment) 
            VALUES  ('$patientid','$dateapp','$doctor','$name','$comment');";
            $ret= pg_query($db, $sql);


    
}
?>