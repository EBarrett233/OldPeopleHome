<html>
<link rel="stylesheet" type="text/css" href="Roster.css" />
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

<div class="container"></div>
<p>Date</p>

<div>
    <p>Supervisor</p>
    <?php
    require("db.php");
    $db = db_connect($host,$port,$dbname,$credentials);

    $sql = "SELECT f_Name FROM Roster WHERE Role = 'Supervisor';";

    $ret = pg_query($db, $sql);
    $rows = pg_fetch_all($ret);
    foreach($rows as $row) {
        echo "<option value=" . strval($row['f_Name']) . "</option>";}
    ?>
</div>

<div>
    <p>Doctor</p>
    <?php

    $sql = "SELECT f_Name FROM Roster WHERE Role = 'Doctor';";
    $ret = pg_query($db, $sql);
    $rows = pg_fetch_all($ret);
    foreach($rows as $row) {
        echo "<option value=" . strval($row['f_Name']) . "</option>";
    }
    ?>
</div>

<div>
    <p>Caregiver1</p>
    <?php

    $sql = "SELECT f_Name FROM Roster WHERE Role = 'Caregiver';";
    $ret = pg_query($db, $sql);
    $rows = pg_fetch_all($ret);
    foreach($rows as $row) {
        echo "<option value=" . strval($row['f_Name']) . "</option>";
    }
    ?>
    <p>Patient group 1</p>
</div>

<div>
    <p>Caregiver2</p>
    <?php

    $sql = "SELECT f_Name FROM Roster WHERE Role = 'Caregiver';";
    $ret = pg_query($db, $sql);
    $rows = pg_fetch_all($ret);
    foreach($rows as $row) {
        echo "<option value=" . strval($row['f_Name']) . "</option>";
    }
    ?>
    <p>Patient group 2</p>
</div>

<div>
    <p>Caregiver3</p>
    <?php

    $sql = "SELECT f_Name FROM Roster WHERE Role = 'Caregiver';";
    $ret = pg_query($db, $sql);
    $rows = pg_fetch_all($ret);
    foreach($rows as $row) {
        echo "<option value=" . strval($row['f_Name']) . "</option>";
    }
    ?>
    <p>Patient group 3</p>
</div>

<div>
    <p>Caregiver4</p>
    <?php

    $sql = "SELECT f_Name FROM Roster WHERE Role = 'Caregiver';";
    $ret = pg_query($db, $sql);
    $rows = pg_fetch_all($ret);
    foreach($rows as $row) {
        echo "<option value=" . strval($row['f_Name']) . "</option>";
    }
    ?>
    <p>Patient group 4</p>
</div>
</div>