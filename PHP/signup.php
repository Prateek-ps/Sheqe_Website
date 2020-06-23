<?php require_once('connection.php');
    if(!$connection)
    {
        die("Connection failed: " . mysqli_connect_error());
    }
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password =  $_POST['password'];
    
    $query = "Insert into users(userid, email, password) values ('".$username."','".$email."','".$password."');";
        
    $result_set = mysqli_query($connection, $query);
    
    if($result_set){
        header("Location:../HTML/login.html");
    }else{
        
    }
    
?>