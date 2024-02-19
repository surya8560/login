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

    $sql="SELECT * FROM details";

    $result=mysqli_query($conn,$sql);
    if(!$result){
        echo "Error:".mysqli_error($conn);
        exit;
    }

    while($row=mysqli_fetch_assoc($result)){
        echo $row['Email'];
    }

    mysqli_close($conn);
?>