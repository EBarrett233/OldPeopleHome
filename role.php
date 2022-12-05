<html>

<!-- <header>
    Role
</header> -->


<div>
    <p>Role</p>
    <p>Emails in system</p>
</div>

<!-- <div>
    <p>Access Level</p>
    <p>List of the access levels go here</p>
</div> -->
<?php

require('db.php');
    $db=db_connect($host,$port,$dbname,$credentials);
    $sql="SELECT email,role,approval FROM Log_info";
    $num=0;
    $ret= pg_query($db, $sql);
    $rows = pg_fetch_all($ret);
        // print_r($rows[0]['email']);
        foreach ($rows as $row) {
            $num+=1;
            echo '<br>'.$num.') ';
            
            echo $row ['email'].'<br>';
            echo ' Users Role: '.$row ['role'].'<br>';
            echo 'This users Role is'.$row['approval'].'<br>';
        }
?>

<div>
    <p>Email to approve</p>
    <input placeholder="email" name='email'>
</div>

<div>
    <p>Access Level</p>
    <input placeholder="role for email selected" name='role'>
</div>

<button>Ok</button>

<button>Cancel</button>

</html>

<?php
// this is going to confirm the new role for the users email







?>