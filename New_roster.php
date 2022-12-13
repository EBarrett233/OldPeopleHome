<!DOCTYPE html>
<link rel="stylesheet" type="text/css" href="New_roster.css" />
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

<form class = "form" method="POST">  
    <h1>New Roster</h1>
    <div class="container">
    <label> Select Supervisor </label>  

    <select> 
    <?php
    require("db.php");
    $db = db_connect($host,$port,$dbname,$credentials);
    $sql = "SELECT f_name FROM log_info WHERE role = 'Supervisor';";
    $ret = pg_query($db, $sql);
    $rows = pg_fetch_all($ret);
    foreach ($rows as $row) {
        echo "<option value=" . strval($row['f_name']) . ">".$row['f_name'] . "</option>";
    }
    ?>

</select> 
    <label> Select Doctor </label> 
    <select> 
    <?php
    
    $sql = "SELECT f_name FROM log_info WHERE role = 'doctor';";
    $ret = pg_query($db, $sql);
    if (! $ret) {echo pg_last_error($db);exit();}
    $rows = pg_fetch_all($ret);
    foreach ($rows as $row) {
        echo "<option value=" . strval($row['f_name']) . ">".$row['f_name'] . "</option>";
    }
    ?>

</select>

    <label> Select Cargiver 1 </label>  
    <select> 
    <?php

    $sql = "SELECT f_name FROM log_info WHERE role = 'caregiver';";
    $ret = pg_query($db, $sql);
    $rows = pg_fetch_all($ret);
    foreach ($rows as $row) {
        echo "<option value=" . strval($row['f_name']) . ">".$row['f_name'] . "</option>";
    }
    ?>

</select> 
    <label> Select Cargiver 2 </label>  
    <select> 
    <?php
    
    $sql = "SELECT f_name FROM log_info WHERE role = 'caregiver';";
    $ret = pg_query($db, $sql);
    $rows = pg_fetch_all($ret);
    foreach ($rows as $row) {
        echo "<option value=" . strval($row['f_name']) . ">".$row['f_name'] . "</option>";
    }
    ?>

</select>     
    <label> Select Cargiver 3 </label>  
    <select> 
    <?php
    
    $sql = "SELECT f_name FROM log_info WHERE role = 'caregiver';";
    $ret = pg_query($db, $sql);
    $rows = pg_fetch_all($ret);
    foreach ($rows as $row) {
        echo "<option value=" . strval($row['f_name']) . ">".$row['f_name'] . "</option>";
    }
    ?>

</select>    
    <label> Select Cargiver 4 </label>  
    <select>
    <?php
    
    $sql = "SELECT f_name FROM log_info WHERE role = 'caregiver';";
    $ret = pg_query($db, $sql);
    $rows = pg_fetch_all($ret);
    foreach ($rows as $row) {
        echo "<option value=" . strval($row['f_name']) . ">".$row['f_name'] . "</option>";
    }
    ?>

</select>   
    </form> 

</div>
<button type="submit" class = "registerbtn">Ok</button>

<button>Cancel</button>

</html>

<?php
    require ('db.php');
    if(isset($_POST['submit'])) {
        return
    }