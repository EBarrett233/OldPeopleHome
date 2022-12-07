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
</div>
</head>
<form>
    <h1>Family Member's Home</h1>
    <div class="container">
    
    <label for="AppointDate"><b>Date</b></label>
    <input type="date" placeholder="Date" name="AppointDate">
    <label for="DocDate"><b>Docter Name:</b></label>
    <input type="text" placeholder="Name" name="DocName">
    <label for="CareName"><b>Caregiver Name:</b></label>
    <input type="text" placeholder="Name" name="CareName"> 
    </div>
    <div class="container">
    <label for="MorningMed"><b>Morning Medicine:</b></label>
    <input type="checkbox" placeholder="Med" name="MorningMed">
    <label for="AfternoonMed"><b>Afternoon Medicine:</b></label>
    <input type="checkbox" placeholder="Med" name="AfternoonMed">
    <label for="NightMed"><b>Night Medicine:</b></label>
    <input type="checkbox" placeholder="Med" name="NightMed">
    <label for="Breakfast"><b>Breakfast:</b></label>
    <input type="checkbox" placeholder="food" name="Breakfast">
    <label for="Lunch"><b>Lunch:</b></label>
    <input type="checkbox" placeholder="food" name="Lunch">
    <label for="Dinner"><b>Dinner:</b></label>
    <input type="checkbox" placeholder="food" name="Dinner">

    </div>
    <div class="container">
    <label for="family code"><b>Family Code(For Patient Family Member):</b></label>
    <input type="text" placeholder="Family Code" name="family code">
    <label for="PatientID"><b>Patient ID(For Patient Family Member):</b></label>
    <input type="text" placeholder="ID" name="PatientID">

</div>
    <button type="submit" class="continue"><strong>OK</strong></button>
    <button type="submit" class="cancle"><strong>Cancle</strong></button>
