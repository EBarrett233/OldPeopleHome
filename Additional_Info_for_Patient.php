<!DOCTYPE html>
<form class="form" method="post">
    <div class="container">
    <h1>Additional Patient info</h1>
    <label for="PatientName"><b>Patient First Name:</b></label>
    <input type="text" placeholder="Name" name="PatientName">



    <label for="PatientID"><b>Patient ID:</b></label>
    <input type="text" placeholder="ID" name="PatientID">

    <label for="Group"><b>Group:</b></label>
    <input type="text" placeholder="Group" name="Group">

    <!-- <label for="AddmisDate"><b>Addmission date</b></label>
    <input type="date" placeholder="Date" name="AddmisDate"> -->


    <label for="PatientName"><b>Caregiver:</b></label>
    <input type="text" placeholder="Caregiver" name="Caregiver">

    <label for="PatientName"><b>Morning Medicine:</b></label>
    <input type="text" placeholder="Morning_Medicine" name="Morning_Medicine">

    <label for="PatientName"><b>Afternoon Medicine:</b></label>
    <input type="text" placeholder="Afternoon_Medicine" name="Afternoon_Medicine">

    <label for="PatientName"><b>Night Medicine:</b></label>
    <input type="text" placeholder="Night_Medicine" name="Night_Medicine">

    <label for="PatientName"><b>Breakfast:</b></label>
    <input type="text" placeholder="Breakfast" name="Breakfast">
    <label for="PatientName"><b>Lunch:</b></label>
    <input type="text" placeholder="Lunch" name="Lunch">
    <label for="PatientName"><b>Dinner:</b></label>
    <input type="text" placeholder="Dinner" name="Dinner">

    <button type="submit" class="continue"><strong>OK</strong></button>
    <!-- <button type="submit" class="cancle"><strong>Cancle</strong></button> -->

    </div>
    </form>


<?php 
if (isset($_POST['PatientID'])) {
    echo'test';
    require('db.php');
    $db=db_connect($host,$port,$dbname,$credentials);
    $PatientID=$_POST['PatientID'];
    $Group1=$_POST['Group'];
    $name=$_POST['PatientName'];
    $caregiver=$_POST['Caregiver'];
    $morning=$_POST['Morning_Medicine'];
    $afternoon=$_POST['Afternoon_Medicine'];
    $nights=$_POST['Night_Medicine'];
    $breakast=$_POST['Breakfast'];
    $lunch=$_POST['Lunch'];
    $dinner=$_POST['Dinner'];
    // db confusing few needed log_info for Group1 and F_name(patients name)
    // also needing PatientId that is used in Doctors_App Admin_Con Patients_Home 
    $sql="SELECT Role,F_name,add_date,DOB FROM Log_info WHERE F_name = '$name';";
    $ret= pg_query($db, $sql);
    
    $rows=pg_fetch_all($ret);
    $Current_Date=date("Y-m-d");
    foreach($rows as $row){
        $R=$row['role'];
        $F=$row['f_name'];
        $A=$row['add_date'];
        $D=$row['dob']; 
        if ($_POST['PatientName'] ==$F){
            echo'test_post';
            
            $sql="INSERT INTO patients_Home (Role,Patients_ID,Patients_Name,Care_Name,Mor_Med,Aft_Med,Night_Med,Breakast,Lunch,Dinner ,Adm_Date,ADMITTED) 
            VALUES  ('$R','$PatientID','$F','$caregiver','$morning','$afternoon','$nights','$breakast','$lunch','$dinner','$Current_Date','Yes');";
            $ret= pg_query($db, $sql);

        }
    else{
            echo'error not inserted into database';
    }
    }
}
// for this function pull all people who have the role patients then pass through the function to add into the db accordingly
?>