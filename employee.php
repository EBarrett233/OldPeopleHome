<!DOCTYPE html>
<link rel="stylesheet" type="text/css" href="Employee.css" />
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
<h1>Employee Home</h1>
<div class="container">
<form class="form" method="POST" name="Register" action="#">

    <label for="EmpName"><b>Employee Name:</b></label>
    <?php
    require("db.php");
    $db=db_connect($host,$port,$dbname,$credentials);
    $sql = "SELECT name_1 FROM emp_info;";

    $ret = pg_query($db, $sql);
    $row = pg_fetch_all($ret);
        echo $row[0]['name_1'];

    ?>

    <label for="EmpID"><b>ID:</b></label>
    <?php

    $sql = "SELECT Emp_ID1 FROM emp_info;";

    $ret = pg_query($db, $sql);
    $row = pg_fetch_all($ret);
        echo $row[0]['emp_id1'];

    ?>


    <label for="role"><b>Role:</b></label>
    <?php

    $sql = "SELECT role FROM emp_info;";

    $ret = pg_query($db, $sql);
    $row = pg_fetch_all($ret);
        echo $row[0]['role'];

    ?>

    <label for="Salary"><b>Salary:</b></label>
    <input type="text" placeholder="Salary" name="Salary">

    <button type="submit" name='submit' value='submit'>Ok</button>

</form>

<?php

if (isset($_REQUEST['submit'])) {


    $salary = $_POST['Salary'];

    // require("db.php");
        $db=db_connect($host,$port,$dbname,$credentials);
        $sql = " UPDATE emp_info 
        SET Salary = '$salary';";
        $ret = pg_query($db, $sql);

}

?>
    
</div>