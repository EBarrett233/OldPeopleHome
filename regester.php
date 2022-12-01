



<!DOCTYPE html>
<html>

<form class="form" method="post" name="Register" action="">
    <div class="container">
    <h1>Register Here</h1>
    <p>Please fill in the details to create an account with us.</p>
    <hr>
    <label for="role"><b>Role:</b></label>
    <select name="Role" id="role">
    <option value="admin">Admin</option>
    <option value="docter">Doctor</option>
    <option value="nurse">Nurse</option>
    <option value="patient">Patient</option>
    <option value="caregiver">Caregiver</option>
    <option value="family">Family</option>
    </select>
    <label for="first"><b>First Name:</b></label>
    <input type="text" placeholder="First name" name="first">

    <label for="last"><b>Last Name:</b></label>
    <input type="text" placeholder="Last name" name="last">

    <label for="phone"><b>Phone Number:</b></label>
    <input type="text" placeholder="Phone Num" name="phone">
    
    <label for="email"><b>Enter Email:</b></label>
    <input type="text" placeholder="Enter Email" name="email">

    <label for="pwd"><b>Password:</b></label>
    <input type="password" placeholder="Enter Password" name="pwd">

    <label for="dob"><b>Date of Birth:</b></label>
    <input type="text" placeholder="Date of Birth" name="dob">

    <hr>
    <br>
    <hr>
    <label for="family code"><b>Family Code(For Patient Family Member):</b></label>
    <input type="text" placeholder="Family Code" name="family code">
    <label for="emergency"><b>Emergency Contact:</b></label>
    <input type="text" placeholder="Emergency Contact" name="emergency">
    <label for="relation emergency"><b>Relation to Emergency Contact:</b></label>
    <input type="text" placeholder="Relation to Emergency Contact" name="emergency relation">
    <hr>
    <button type="submit" class="registerbtn"><strong>Register</strong></button>
    </div>
    <div class="container signin">
    <p>Already have an account? <a href="#">Sign in</a>.</p>
    </div>
</form>
</html>

<?php
    require('db.php');
    if (isset($_REQUEST['first'])) {
        $first = $_REQUEST['first'];
        // $first = mysqli_real_escape_string($con, $first);
        $last=$_REQUEST['last'];
        // $last=mysqli_real_escape_string($con, $last);
        $phone = $_REQUEST['phone'];
        // $phone = mysqli_real_escape_string($con, $phone);
        $email = $_REQUEST['email'];
        // $email = mysqli_real_escape_string($con, $email);
        $pwd = $_REQUEST['pwd'];
        // $pwd = mysqli_real_escape_string($con, $pwd);
        $dob = $_REQUEST['dob'];
        // $dob = mysqli_real_escape_string($con, $dob);
        
        $db=db_connect($host,$port,$dbname,$credentials);
        $sql = " INSERT into Log_info (F_Name,L_Name,phone,Email,Pwd,DOB)
        VALUES
        ('$first','$last','$phone','$email','$pwd','$dob');";
        $ret = pg_query($db,$sql);
        if (! $ret)
            echo pg_last_error($db);
            exit();
        





        // $create_datetime = date("Y-m-d H:i:s");
        // $query    = "INSERT into `users` (username, password, email, create_datetime)
        //             VALUES ('$username', '" . md5($password) . "', '$email', '$create_datetime')";
        // $result   = mysqli_query($con, $query);
        // if ($result) {
        //     echo "<div class='form'>
        //         <h3>You are registered successfully.</h3><br/>
        //         <p class='link'>Click here to <a href='login.php'>Login</a></p>
        //         </div>";
        // } else {
        //     echo "<div class='form'>
        //         <h3>Required fields are missing.</h3><br/>
        //         <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
        //         </div>";
        // }
    } 
?>