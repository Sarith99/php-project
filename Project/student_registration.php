<?php

include('dbconnect.php');

if(isset($_POST['submit'])){

    $uname = $_POST['uname'];
    $qualifications = $_POST['qualifications'];
    $course = $_POST['course'];
    
    


    $sql_query = "INSERT INTO student_registration
    (username, qualifications, course_name) 
    VALUES 
    ('$uname', '$qualifications', '$course')"; 


    if(mysqli_query($conn, $sql_query)){

        header("Location: first.php");
        exit();


    }else{
        
        echo"Error: ".$sql. "" . mysqli_error($conn);

    }
    mysqli_close($conn);
}

?>