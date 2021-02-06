<?php

include('dbconnect.php');

if(isset($_POST['submit'])){

    $code = $_POST['code'];
    $bno = $_POST['bno'];
    $cdate = $_POST['cdate'];
    $rno = $_POST['rno'];
    $ap = $_POST['ap'];
    $cfee = $_POST['cfee'];
    $sc = $_POST['sc'];


    $sql_query = "INSERT INTO course_details
    (course_code, batch_no, com_date, reg_no, payment, fee, comments) 
    VALUES 
    ('$code', '$bno', '$cdate', '$rno', '$ap', '$cfee', '$sc')"; 


    if(mysqli_query($conn, $sql_query)){

        header("Location: first.php");
        exit();

    }else{
        
        echo"Error: ".$sql. "" . mysqli_error($conn);

    }
    mysqli_close($conn);
}

?>