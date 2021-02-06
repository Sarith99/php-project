<?php
include('dbconnect.php');

if(isset($_POST['submit'])){

    $uname = $_POST['uname'];
    $psw = $_POST['psw'];
    


    $sql_query = "INSERT INTO `login`
    (`username`, `password`) 
    VALUES 
    ('$uname', '$psw')"; 


    if(mysqli_query($conn, $sql_query)){

        header("Location: first.php");
        exit();

    }else{
        
        echo"Error: ".$sql. "" . mysqli_error($conn);

    }
    mysqli_close($conn);
}
?>