<?php

    $db_hostname="127.0.0.1";
    $db_usernanme="root";
    $db_password="";
    $db_name="fitness";

    $conn=mysqli_connect($db_hostname,$db_usernanme,$db_password,$db_name);
    if(!$conn){
        echo "Connection filed:" .mysqli_connect_error();
        exit;
    }

    $email=$_POST['Email'];
    $password=$_POST['password'];
    $confirmpassword=$_POST['confirmpassword'];

    $sql="INSERT INTO details(Email,password,confirmpassword) VALUES ('$email','$password','$confirmpassword')";
   
    if(strlen($email)==0){
        echo "Must fill all the details ";
        exit;
    }
    else if(strlen($password)==0){
        echo "Must fill all the details ";
        exit;
    }
    else if($password==$confirmpassword)
    {
        echo "Registration successfull!";
    }
    else
    {
        echo "Both password should not mathch!";
        exit;
    }

    $result=mysqli_query($conn,$sql);
    if(!$result){
        echo "Error:".mysqli_error($conn);
        exit;
    }
    
    mysqli_close($conn);
  
?>
