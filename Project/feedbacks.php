<?php

include('dbconnect.php');

if(isset($_POST['submit'])){

    $feedbacks = $_POST['feedbacks'];
   


    $sql_query = "INSERT INTO feedbacks
    (feedbacks) 
    VALUES 
    ('$feedbacks')"; 


    if(mysqli_query($conn, $sql_query)){

        header("Location: first.php");
        exit();


    }else{
        
        echo"Error: ".$sql. "" . mysqli_error($conn);

    }
    mysqli_close($conn);
}

?>