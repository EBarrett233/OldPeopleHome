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

<form action = "New_Roster.php" method="POST" >  
    <h1>Payment</h1>

    <div class="container">
        <p>Patient ID</p>
        <imput name = patient_id type = 'text' placeholder = 'Patient ID'></imput>

        <p>Total Due</p>
        <imput name = 'due' type = 'text' placeholder = 'Total Amount Due'>

        <p>New Payment</p>
        <imput name = 'pay' type = 'text' placeholder = 'Amount want to pay'>
        <div>


    </div>
</div>
    <button type="submit" name='submit' value='submit'>Ok</button>

    <button>Cancel</button>

    <button>update</button>
</html>

</form>

<?php

if (isset($_REQUEST['submit'])) {

    $x = $due - $pay;

    $new_pay = $_POST[$x];

    $patient_id = $_POST['patient_id'];


        $db=db_connect($host,$port,$dbname,$credentials);
        $sql = " INSERT into admin_con (patient_id, total_due)
        VALUES
        ('$patient_id','$new_pay');";
}

?>