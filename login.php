<!DOCTYPE html>
<form class="form" method="post" name="Login">
    <div class="container">
    <h1>Login Here</h1>
    <hr>
    <label for="email"><b>Enter Email:</b></label>
    <input type="text" placeholder="Enter Email" name="email">
    <label for="pwd"><b>Password:</b></label>
    <input type="password" placeholder="Enter Password" name="pwd">
    <hr>
    <button type="submit" class="registerbtn"><strong>login</strong></button>
    </div>
    <div class="container Register">
        <p>Don't have an account? <a href="regester.php">Register</a>.</p>
        <h1><?phpif(isset($_GET['error'])){echo "error: " . $_GET['error'];}?></h1>
    </div>
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
        $sql="SELECT Pwd FROM Log_info WHERE email = '$email';";
        
        $ret= pg_query($db, $sql);
        if (! $ret){
            echo pg_last_error($db);
            exit();
            }
        $rows=pg_fetch_all($ret);
        foreach($rows as $row){
            if ($row['pwd']==$_POST['pwd'])
            header("Location:Admin_Home.html");
        }
        echo "<br>";
        echo'wrong info gabe proll messed with the code so if you ever see this message punch the hell out of GABE DOMBACH';

    }
?>