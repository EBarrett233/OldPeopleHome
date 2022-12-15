<!DOCTYPE html>
<link rel="stylesheet" type="text/css" href="family_members_home.css" />
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
    <h1>Family Member's Home</h1>

    </div>
    <div class="container">
    <label for="family code"><b>Family Code(For Patient Family Member):</b></label>
    <input type="text" placeholder="Family Code" name="family_code">
    

</div>
    <button name="submit" type="submit" class="continue"><strong>OK</strong></button>
    <button type="submit" class="cancle"><strong>Cancle</strong></button>


    <div class="container">
    
    <!-- <label for="AppointDate"><b>Date</b></label>
        <?php
        require("db.php");
        $db=db_connect($host,$port,$dbname,$credentials);

    $fam_code = $_POST['family_code'];

    if ($fam_code == 'patientname') {
        $sql = "SELECT PatientName FROM Admin_home where 'patientsname' = $fam_code;";

        $ret = pg_query($db, $sql);
        $row = pg_fetch_all($ret);
        echo $row[0]['date_p'];
    }
    ?> -->

    <label for="DocDate"><b>Docter Name:</b></label>

    <?php
    require("db.php");
    $db=db_connect($host,$port,$dbname,$credentials);

    $fam_code = $_POST['family_code'];

    if ($fam_code == 'patientsname') {
        $sql = "SELECT DocName FROM Admin_home where 'patientsname' = $fam_code;";

        $ret = pg_query($db, $sql);
        $row = pg_fetch_all($ret);
        echo $row[0]['docname'];
    }
    ?>

    <label for="CareName"><b>Caregiver Name:</b></label>
    
    <?php
    if ($fam_code == 'patientsname') {
        $sql = "SELECT CareName FROM Admin_home where 'patientsname' = $fam_code;";

        $ret = pg_query($db, $sql);
        $row = pg_fetch_all($ret);
        echo $row[0]['carename'];
    }
    ?>

    </div>
    <div class="container">
    <label for="MorningMed"><b>Morning Medicine:</b></label>
   
    <?php
    if ($fam_code == 'patientsname') {
        $sql = "SELECT MorningMed FROM Admin_home where 'patientsname' = $fam_code;";

        $ret = pg_query($db, $sql);
        $row = pg_fetch_all($ret);
        echo $row[0]['morningmed'];
    }
    ?>

    <label for="AfternoonMed"><b>Afternoon Medicine:</b></label>

    <?php
    if ($fam_code == 'patientsname') {
        $sql = "SELECT afternoonmed FROM Admin_home where 'patientsname' = $fam_code;";

        $ret = pg_query($db, $sql);
        $row = pg_fetch_all($ret);
        echo $row[0]['afternoonmed'];
    }
    ?>

    <label for="NightMed"><b>Night Medicine:</b></label>
    
    <?php
    if ($fam_code == 'patientsname') {
        $sql = "SELECT NightMed FROM Admin_home where 'patientsname' = $fam_code;";

        $ret = pg_query($db, $sql);
        $row = pg_fetch_all($ret);
        echo $row[0]['nightmed'];
    }
    ?>

    <label for="Breakfast"><b>Breakfast:</b></label>

    <?php
    if ($fam_code == 'patientsname') {
        $sql = "SELECT Breakfast FROM Admin_home where 'patientsname' = $fam_code;";

        $ret = pg_query($db, $sql);
        $row = pg_fetch_all($ret);
        echo $row[0]['breakfast'];
    }
    ?>

    <label for="Lunch"><b>Lunch:</b></label>

    <?php
    if ($fam_code == 'patientsname') {
        $sql = "SELECT Lunch FROM Admin_home where 'patientsname' = $fam_code;";

        $ret = pg_query($db, $sql);
        $row = pg_fetch_all($ret);
        echo $row[0]['lunch'];
    }
    ?>

    <label for="Dinner"><b>Dinner:</b></label>

    <?php
    if ($fam_code == 'patientsname') {

        $sql = "SELECT Dinner FROM Admin_home where 'patientsname' = $fam_code;";

        $ret = pg_query($db, $sql);
        $row = pg_fetch_all($ret);
        echo $row[0]['dinner'];
    }
    ?>

    

    <?php

    if (isset($_REQUEST['submit'])) {
        $fam_code = $_POST['family_code'];

       
        $sql = "UPDATE (fam_code)
        SET
        ('$fam_code');
        where 'patients_name' = $fam_code";
        $ret = pg_query($db, $sql);

    }
?>