<?php

include('dbconnect.php');

if(isset($_POST['submit'])){

    $fullname = $_POST['fullname'];
    $initials = $_POST['initials'];
    $nid = $_POST['nid'];
    $nation = $_POST['nation'];
    $address = $_POST['address'];
    $dob = $_POST['dob'];
    $school = $_POST['school'];
    $tel_no = $_POST['tel_no'];
    $email = $_POST['email'];


    $sql_query = "INSERT INTO personal_details
    (`full_name` , `initials`, `nid`, `nation`, `address`, `dob`, `school`, `tel_no`, `email`) 
    VALUES 
    ('$fullname', '$initials', '$nid', '$nation', '$address', '$dob', '$school', '$tel_no', '$email')"; 


    if(mysqli_query($conn, $sql_query)){

        header("Location: first.php");
        exit();


    }else{
        
        echo"Error: ".$sql. "" . mysqli_error($conn);

    }
    mysqli_close($conn);
}


?>