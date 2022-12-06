<!DOCTYPE html><link rel="stylesheet" type="text/css" href="Admin_Home.css" />
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
    <h1>Caregiver home</h1>
    <div class="container">

    <button type="submit" class="continue"><strong>List of patients duty today </strong></button>
    
    <label for="PatientName"><b>Patient Name:</b></label>
    <input type="text" placeholder="Name" name="PatientName">    
    <label for="MorningMed"><b>Morning Medicine:</b></label>
    <input type="text" placeholder="Med" name="MorningMed">
    <label for="AfternoonMed"><b>Afternoon Medicine:</b></label>
    <input type="text" placeholder="Med" name="AfternoonMed">
    <label for="NightMed"><b>Night Medicine:</b></label>
    <input type="text" placeholder="Med" name="NightMed">
    </div>
    <div class="container">
    <label for="Breakfast"><b>Breakfast:</b></label>
    <input type="text" placeholder="food" name="Breakfast">
    <label for="Lunch"><b>Lunch:</b></label>
    <input type="text" placeholder="food" name="Lunch">
    <label for="Dinner"><b>Dinner:</b></label>
    <input type="text" placeholder="food" name="Dinner">
    </div>
    <button type="submit" class="continue"><strong>OK</strong></button>
    <button type="submit" class="cancle"><strong>Cancle</strong></button>
    </div>