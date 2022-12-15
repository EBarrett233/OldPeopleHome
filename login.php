<!DOCTYPE html>
<form class="form" method="post" name="Login">
    <link rel="stylesheet" type="text/css" href="login.css" />
    <h1>Login Here</h1>
    <div class="container">
    <label for="email"><b>Enter Email:</b></label>
    <input type="text" placeholder="Enter Email" name="email">
    <label for="pwd"><b>Password:</b></label>
    <input type="password" placeholder="Enter Password" name="pwd">
    <button type="submit" class="registerbtn"><strong>login</strong></button>
    </div>
    <p>Don't have an account? <a href="regester.php">Register</a>.</p>
    <h1><?phpif(isset($_GET['error'])){echo "error: " . $_GET['error'];}?></h1>
</form>
</html>

<?php
    require('db.php');
    $admin_user='admin@admin.com';
    $admin_pass='admin77';
    if (isset($_REQUEST['email'])) {
        $email=$_REQUEST['email'];
        $pwd=$_REQUEST['pwd'];
        $db=db_connect($host,$port,$dbname,$credentials);
        $sql="SELECT Pwd,role FROM Log_info WHERE email = '$email';";
        
        $ret= pg_query($db, $sql);
        if (! $ret){
            // echo pg_last_error($db);
            // leave commented unless DB error
            exit();
            }
        $rows=pg_fetch_all($ret);
        foreach($rows as $row){
            if ($_POST['pwd'] ==$admin_pass && $_POST['email'] == $admin_user)
            header("Location:Admin_Home.php");
            // if statement for admin login admin info is hardcodded as above untill more funtions are working
            elseif ($row['pwd']==$_POST['pwd'])
                if ($row['role']=='doctor'){
                    header("Location:Doctor_Appointment.php");
                    $row['id'] = $_SESSION['id'];
                }
                elseif($row['role']=='caregiver'){
                    header("Location:Caregivers_Home.php");
                    $row['id'] = $_SESSION['id'];
                }
                elseif($row['role']=='patient'){
                    header("Location:Patient_Home.php");
                    $row['id'] = $_SESSION['id'];
                }
                elseif($row['role']=='Supervisor'){
                    header("Location:Admin_Home.php");
                    $row['id'] = $_SESSION['id']; 
                }
                    // checks user info and takes to this page WILL CHANGE when home page is added
        }
        echo "<br>";
        echo'wrong info gabe proll messed with the code so if you ever see this message punch the hell out of GABE DOMBACH';

    }
?>