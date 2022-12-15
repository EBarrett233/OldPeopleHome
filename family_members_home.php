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
    <div class="container">
    
    <label for="AppointDate"><b>Date</b></label>
    <?php
    require("db.php");
    $db=db_connect($host,$port,$dbname,$credentials);
    $sql = "SELECT Date_P FROM patients_home where family_code = 'patients_name';";

    $ret = pg_query($db, $sql);
    $row = pg_fetch_all($ret);
        echo $row[0]['date_p'];

    ?>

    <label for="DocDate"><b>Docter Name:</b></label>

    <?php
    $sql = "SELECT doc_name FROM patients_home where family_code = 'patients_name';";

    $ret = pg_query($db, $sql);
    $row = pg_fetch_all($ret);
        echo $row[0]['doc_name'];
    ?>

    <label for="CareName"><b>Caregiver Name:</b></label>
    
    <?php
    $sql = "SELECT Care_Name FROM patients_home where family_code = 'patients_name';";

    $ret = pg_query($db, $sql);
    $row = pg_fetch_all($ret);
        echo $row[0]['Care_Name'];
    ?>

    </div>
    <div class="container">
    <label for="Mor_Med"><b>Morning Medicine:</b></label>
   
    <?php
    $sql = "SELECT Mor_Med FROM patients_home where family_code = 'patients_name';";

    $ret = pg_query($db, $sql);
    $row = pg_fetch_all($ret);
        echo $row[0]['mor_med'];
    ?>

    <label for="AfternoonMed"><b>Afternoon Medicine:</b></label>

    <?php
    $sql = "SELECT Aft_Med FROM patients_home where family_code = 'patients_name';";

    $ret = pg_query($db, $sql);
    $row = pg_fetch_all($ret);
        echo $row[0]['aft_med'];
    ?>

    <label for="NightMed"><b>Night Medicine:</b></label>
    
    <?php
    $sql = "SELECT Night_Med FROM patients_home where family_code = 'patients_name';";

    $ret = pg_query($db, $sql);
    $row = pg_fetch_all($ret);
        echo $row[0]['night_med'];
    ?>

    <label for="Breakfast"><b>Breakfast:</b></label>

    <?php
    $sql = "SELECT Breakast FROM patients_home where family_code = 'patients_name';";

    $ret = pg_query($db, $sql);
    $row = pg_fetch_all($ret);
        echo $row[0]['breakast'];
    ?>

    <label for="Lunch"><b>Lunch:</b></label>

    <?php
    $sql = "SELECT Lunch FROM patients_home where family_code = 'patients_name';";

    $ret = pg_query($db, $sql);
    $row = pg_fetch_all($ret);
        echo $row[0]['lunch'];
    ?>

    <label for="Dinner"><b>Dinner:</b></label>

    <?php
    $sql = "SELECT Dinner FROM patients_home where family_code = 'patients_name';";

    $ret = pg_query($db, $sql);
    $row = pg_fetch_all($ret);
        echo $row[0]['dinner'];
    ?>

    </div>
    <div class="container">
    <label for="family code"><b>Family Code(For Patient Family Member):</b></label>
    <input type="text" placeholder="Family Code" name="family_code">
    

</div>
    <button name="submit" type="submit" class="continue"><strong>OK</strong></button>
    <button type="submit" class="cancle"><strong>Cancle</strong></button>

    <?php

    if (isset($_REQUEST['submit'])) {
        $fam_code = $_POST['family_code'];

        require("db.php");
        $db = db_connect($host, $port, $dbname, $credentials);
        $sql = "UPDATE (fam_code)
        SET
        ('$fam_code');";
        $ret = pg_query($db, $sql);

    }
?>