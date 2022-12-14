<html>
<link rel="stylesheet" type="text/css" href="payment.css" />
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

<form action = "payment.php" method="POST" >  
    <h1>Payment</h1>
    

    <div class="container">
        <p>Patient ID</p>
        <input name = patient_id type = 'text' placeholder = 'Patient ID'>

        <p>Total Due</p>
        <input name = due type = 'text' placeholder = 'Total Amount Due'>

        <p>New Payment</p>
        <input name = pay type = 'text' placeholder = 'Amount want to pay'>
        <div>


    
</div>
    <button type="submit" name='submit' value='submit'>Ok</button>

    <button>Cancel</button>

    <button>update</button>
    </form>
</html>



<?php

if (isset($_REQUEST['submit'])) {

    $x = intval($_POST['due']) - intval($_POST['pay']);

   

    $patient_id = $_POST['patient_id'];
    

    require("db.php");
        $db=db_connect($host,$port,$dbname,$credentials);
        $sql = " INSERT into admin_con (patient_id, total_due)
        VALUES
        ('$patient_id','$x');";
        $ret = pg_query($db, $sql);

}

?>