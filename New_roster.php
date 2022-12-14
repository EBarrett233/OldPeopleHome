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

<form action = "New_Roster.php" method="POST" >  
    <h1>New Roster</h1>
    <div class="container">
    <label for = "Supervisor"> Select Supervisor </label>  

    <select name = 'Supervisor_fname'> 
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
    <select name = 'Doctor_fname'> 
    <?php
    
    $sql = "SELECT f_name FROM log_info WHERE role = 'doctor';";
    $ret = pg_query($db, $sql);
    $rows = pg_fetch_all($ret);
    foreach ($rows as $row) {
        echo "<option value=" . strval($row['f_name']) . ">".$row['f_name'] . "</option>";
    }
    ?>

    </select>

    <label for = "first"> Select Cargiver 1 </label>  
    <select name = 'Caregiver_group1_fname'> 
    <?php

    $sql = "SELECT f_name FROM log_info WHERE role = 'caregiver';";
    $ret = pg_query($db, $sql);
    $rows = pg_fetch_all($ret);
    foreach ($rows as $row) {
        echo "<option value=" . strval($row['f_name']) . ">".$row['f_name'] . "</option>";
    }
    ?>

    </select> 
    <label for = "first"> Select Cargiver 2 </label>  
    <select name = 'Caregiver_group2_fname'> 
    <?php
    
    $sql = "SELECT f_name FROM log_info WHERE role = 'caregiver';";
    $ret = pg_query($db, $sql);
    $rows = pg_fetch_all($ret);
    foreach ($rows as $row) {
        echo "<option value=" . strval($row['f_name']) . ">".$row['f_name'] . "</option>";
    }
    ?>

    </select>     
    <label for = "first"> Select Cargiver 3 </label>  
    <select name = 'Caregiver_group3_fname'>  
    <?php
    
    $sql = "SELECT f_name FROM log_info WHERE role = 'caregiver';";
    $ret = pg_query($db, $sql);
    $rows = pg_fetch_all($ret);
    foreach ($rows as $row) {
        echo "<option value=" . strval($row['f_name']) . ">".$row['f_name'] . "</option>";
    }
    ?>

    </select>    
    <label for = "first"> Select Cargiver 4 </label>  
    <select name = 'Caregiver_group4_fname'>
    <?php
    
    $sql = "SELECT f_name FROM log_info WHERE role = 'caregiver';";
    $ret = pg_query($db, $sql);
    $rows = pg_fetch_all($ret);
    foreach ($rows as $row) {
        echo "<option value=" . strval($row['f_name']) . ">".$row['f_name'] . "</option>";
    }
    ?>

    </select>   
 

</div>
<button type="submit" name='submit' value='submit' = "registerbtn">Ok</button>

<button>Cancel</button>
</form>
</html>

<?php

// $host        = "host = 127.0.0.1";
// $port        = "port = 5432";
// $dbname      = "dbname = Old_People";
// $credentials = "user = daneshaut password=Dane#5503";

    if (isset($_REQUEST['submit'])) {
        $d=date("Y-m-d");
        // $role=$_REQUEST['Role'];

        $Supervisor_fname = $_POST['Supervisor_fname'];
        $Doctor_fname = $_POST['Doctor_fname'];
        $Caregiver_group1_fname = $_POST['Caregiver_group1_fname'];
        $Caregiver_group2_fname = $_POST['Caregiver_group2_fname'];
        $Caregiver_group3_fname = $_POST['Caregiver_group3_fname'];
        $Caregiver_group4_fname = $_POST['Caregiver_group4_fname'];


        $db=db_connect($host,$port,$dbname,$credentials);
        $sql = " INSERT into roster (Supervisor_fname,Doctor_fname,Caregiver_group1_fname,Caregiver_group2_fname,Caregiver_group3_fname,Caregiver_group4_fname,Date_R)
        VALUES
        ('$Supervisor_fname','$Doctor_fname','$Caregiver_group1_fname','$Caregiver_group2_fname','$Caregiver_group3_fname','$Caregiver_group4_fname','$d');";
        $ret = pg_query($db,$sql);
        // if (! $ret){
        //     //echo pg_last_error($db);
        //     exit();
        // }
        // $rows=pg_fetch_all($ret);
    } 
?>