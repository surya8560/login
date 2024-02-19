<?php
    $db_hostname = "127.0.0.1";
    $db_username = "root";
    $db_password = "";
    $db_name = "fitness";

    $conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);
    if (!$conn) {
        echo "Connection failed: " . mysqli_connect_error();
        exit;
    }

    $email=$_POST['Email'];
    $password=$_POST['password'];

    $sql = "SELECT * FROM details WHERE Email='$email' AND confirmpassword='$password' ";

    if(isset($_POST['confirmpassword'])){
        $confirmpassword=$_POST['$confirmpassword'];
    }

    $result = mysqli_query($conn, $sql);
    if (!$result) {
        echo "Error: ".mysqli_error($conn);
        exit;
    }

    $row = mysqli_fetch_assoc($result);
    if(strlen($email)==0){
        echo "Must fill all the details";
        exit;
    }
    else if(strlen($password)==0){
        echo "Must fill all the details";
        exit;
    }
    else if($row){
        header('Location:http://127.0.0.1/html/main.html');
    }
    else{
        echo "login failed";
        exit;
    }
    // if ($row) {
    //     echo "Hello ".$row['name'] . "<br/>";
    // } else {
    //     echo "Login Failed<br/>";
    // }

    mysqli_close($conn);
?>
