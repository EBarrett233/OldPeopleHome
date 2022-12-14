<!DOCTYPE html>
<html>
<form class="form" method="POST" name="Register" action="#">
<link rel="stylesheet" type="text/css" href="regester.css" />
<form class="form" method="post" name="Register" action="">
    <h1>Register Here</h1>
    <p>Please fill in the details to create an account with us.</p>
    <div class="container">
    <label class="role" for="role"><b>Role:</b></label>
    <select name="role" id="role">
    <option  name="doctor" value="doctor">Doctor</option>
    <option  name="nurse" value="nurse">Nurse</option>
    <option  name="patient" value="patient">Patient</option>
    <option  name="caregiver" value="caregiver">Caregiver</option>
    <option  name="family" value="family">Family</option>
    </select>
    <label for="first"><b>First Name:</b></label>
    <input type="text" placeholder="First name" name="first" required>

    <label for="last"><b>Last Name:</b></label>
    <input type="text" placeholder="Last name" name="last" required>

    <label for="phone"><b>Phone Number:</b></label>
    <input type="text" placeholder="Phone Num" name="phone" required>
    
    <label for="email"><b>Enter Email:</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="pwd"><b>Password:</b></label>
    <input type="password" placeholder="Enter Password" name="pwd" required>

    <label for="dob"><b>Date of Birth:</b></label>
    <input type="date" placeholder="Date of Birth" name="dob" required>

    <button type="submit" name='submit' class="registerbtn"><strong>Register</strong></button>

    </div>
    <div class="container">
    <label for="family code"><b>Family Code(For Patient Family Member):</b></label>
    <input type="text" placeholder="Family Code" name="family code">
    <label for="emergency"><b>Emergency Contact:</b></label>
    <input type="text" placeholder="Emergency Contact" name="emergency">
    <label for="relation emergency"><b>Relation to Emergency Contact:</b></label>
    <input type="text" placeholder="Relation to Emergency Contact" name="emergency relation">
    </div>
    <p>Already have an account? <a href="login.php">Sign in</a>.</p>
</form>
</html>





<?php

require('db.php');
    if (isset($_POST['submit'])) {
        $email = $_REQUEST['email'];
        $db=db_connect($host,$port,$dbname,$credentials);

        $sql="SELECT Email FROM Log_info";
        $ret = pg_query($db,$sql);
                $rows=pg_fetch_all($ret);
                foreach($rows as $row){ 
                    if ($row['email']==$email){
                        echo 'email in use choose a different email';
                    }
                }
            }
?>
<?php
    // require('db.php');
    if (isset($_POST['submit'])) {
        $d=date("Y-m-d");
        $role=$_POST['role'];

        $first = $_REQUEST['first'];
        $last=$_REQUEST['last'];
        $phone = $_REQUEST['phone'];
        $email = $_REQUEST['email'];
        $pwd = $_REQUEST['pwd'];
        $dob = $_REQUEST['dob'];
        $db=db_connect($host,$port,$dbname,$credentials);
        
        $sql = " INSERT into Log_info (Role,F_Name,L_Name,phone,Email,Pwd,DOB,Approval,Add_Date)
        VALUES
        ('$role','$first','$last','$phone','$email','$pwd','$dob','Not Approved','$d');";
        $ret = pg_query($db,$sql);
        if (! $ret)
            echo pg_last_error($db);
            exit();
        } 
        
?>



