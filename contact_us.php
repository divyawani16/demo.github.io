<?php

include("connection.php");

if(isset($_POST['contact'])){

    $name=htmlentities(mysqli_real_escape_string($con,$_POST['name']));
    $email=htmlentities(mysqli_real_escape_string($con,$_POST['email']));
    $msg=htmlentities(mysqli_real_escape_string($con,$_POST['msg']));

    $select_user="insert into contact values('','$name','$email','$msg');";

    $query=mysqli_query($con,$select_user);
    echo "<script>
    setTimeout
    (function()
     {
         window.open('index.php','_self')}, 2000);
    </script>";
    }
    ?>