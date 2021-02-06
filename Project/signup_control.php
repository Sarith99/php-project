<?php

include('dbconnect.php');

if(isset($_POST['submit'])){

    $uname = $_POST['uname'];
    $email = $_POST['email'];
    $psw = $_POST['psw'];
    


    $sql_query = "INSERT INTO `signup`
    (`username`, `email`, `password`) 
    VALUES 
    ('$uname', '$email', '$psw')"; 


    if(mysqli_query($conn, $sql_query)){

        header("Location: first.php");
        exit();

    }else{
        
        echo"Error: ".$sql. "" . mysqli_error($conn);

    }
    mysqli_close($conn);
}


?>