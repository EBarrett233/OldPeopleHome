<html>
<link rel="stylesheet" type="text/css" href="Roster.css" />
<head>
    <div class="title">
    <a href="Additional_Info_for_Patient.php">Patient Info</a>
    <a href="Doctor_Appointment.php">Doctor Appointment</a>
    <a href="role.php">Role</a>
    <a href="Patient_Home.php">Patient Home</a>
    <a href="Roster.php">Current Roster</a>
    <a href="New_Roster.php">Make a new Roster</a>
    <a href="payment.php">Make a Payment</a>
    <a href="employee.php">Employee</a>
</div>
</head>

<div class="container">
<p>Date</p>
<form action = "Roster.php">


<button type="submit" name='submit' value='submit'>show roster </button>
<div>
    <p>Supervisor</p>
    <?php
    $date = DATE("Y-m-d");
    // $db = db_connect($host,$port,$dbname,$credentials);
    require("db.php");
    $db = pg_connect( "$host $port $dbname $credentials"  );
    // number_format($date);    

    $sql = "SELECT supervisor_fname FROM roster Where date_r = '$date';";

    $ret = pg_query($db, $sql);
    $row = pg_fetch_all($ret);
        echo $row[0]['supervisor_fname'];
        // error Here
        // error here
    ?>
</div>

<div>
    <p>Doctor</p>
    <?php
          // error here
        // error here
    $sql = "SELECT doctor_fname FROM roster Where date_r = '$date';";
    $ret = pg_query($db, $sql);
    $rows = pg_fetch_all($ret);
        echo $rows[0]['doctor_fname'];
    ?>
</div>

<div>
    <p>Caregiver1</p>
    <?php
    
    $sql = "SELECT caregiver_group1_fname FROM roster Where date_r = '$date';";
    $ret = pg_query($db, $sql);
    $rows = pg_fetch_all($ret);
        echo $rows[0]['caregiver_group1_fname'];
    ?>
    <p>Patient group 1</p>
</div>

<div>
    <p>Caregiver2</p>
    <?php
    
    $sql = "SELECT caregiver_group2_fname FROM roster Where date_r = '$date';";
    $ret = pg_query($db, $sql);
    $rows = pg_fetch_all($ret);
        echo $rows[0]['caregiver_group2_fname'];
    ?>
    <p>Patient group 2</p>
</div>

<div>
    <p>Caregiver3</p>
    <?php
    
    $sql = "SELECT caregiver_group3_fname FROM roster Where date_r = '$date';";
    $ret = pg_query($db, $sql);
    $rows = pg_fetch_all($ret);
        echo $rows[0]['caregiver_group3_fname'];
    ?>
    <p>Patient group 3</p>
</div>

<div>
    <p>Caregiver4</p>
    <?php
    
    $sql = "SELECT caregiver_group4_fname FROM roster Where date_r = '$date';";
    $ret = pg_query($db, $sql);
    $rows = pg_fetch_all($ret);
        echo $rows[0]['caregiver_group4_fname'];
    ?>
    <p>Patient group 4</p>
    </div>
</div>
    </form>