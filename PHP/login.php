<?php require_once('connection.php');
    if(!$connection)
    {
        die("Connection failed: " . mysqli_connect_error());
    }
    $username = $_POST['username'];
    $password =  $_POST['password'];
    
    $query = "Select password from users where userid = '".$username."'";
    $result = mysqli_query($connection, $query);
    $result_set = mysqli_fetch_assoc($result);
    if($result_set){
        header("Location:../HTML/userprofile.html");
    }else{
        header("Location:../HTML/login.html");
    }

?>