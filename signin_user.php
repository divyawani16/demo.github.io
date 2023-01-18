<?php

session_start();
include("connection.php");

if(isset($_POST['sign_in'])){

    $pass=htmlentities(mysqli_real_escape_string($con,$_POST['user_pass']));
    $email=htmlentities(mysqli_real_escape_string($con,$_POST['user_email']));

    $select_user="select * from users where user_email='$email' AND user_pass='$pass'";

    $query=mysqli_query($con,$select_user);
    $check_user=mysqli_num_rows($query);

    if($check_user==1)
    {
        $_SESSION['user_email']=$email;
        $get_user="select * from users where user_email='$email'";
        $run_user=mysqli_query($con,$get_user);
        $row=mysqli_fetch_array($run_user);

        $user_name = $row['user_name'];

        echo "<script>
        document.getElementById(`nr`).style.visibility='hidden';
        document.getElementById(`box`).style.visibility='hidden';
        document.getElementById(`btn`).style.visibility='hidden';
        document.getElementById(`o`).innerHTML=`Login Success !!`;
        setTimeout
        (function()
         {
             window.open('Dashboard.html?user_name=$user_name','_self')}, 1000);
        </script>";
    }
    else{
        echo "<script>alert('check your email and password go on register in page')
        location.href=`signup.php.`;</script>";
    }
}
?>