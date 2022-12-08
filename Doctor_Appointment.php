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
<form>
    <h1>Doctor Appointment</h1>
    <div class="container">
    <label for="PatientID"><b>Patient ID:</b></label>
    <input type="text" placeholder="ID" name="PatientID">
    <label for="AppointDate"><b>Date</b></label>
    <input type="date" placeholder="Date" name="AppointDate">
    <label for="role"><b>Doctor:</b></label>
    <select name="Doc" id="Doc">
    <option value="Doctor1">Doctor1</option>
    <option value="Doctor2">Doctor2</option>
    <option value="Doctor3">Doctor3</option>
    <option value="Doctor4">Doctor4</option>
    </select>
    <label for="PatientName"><b>Patient Name:</b></label>
    <input type="text" placeholder="Name" name="PatientName">
    </div>
    <button type="submit" class="continue"><strong>OK</strong></button>
    <button type="submit" class="cancle"><strong>Cancle</strong></button>