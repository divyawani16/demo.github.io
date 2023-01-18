<?php
include("connection.php");
if(isset($_POST['sign_up'])){
    $name=htmlentities(mysqli_real_escape_string($con,$_POST['user_name']));
    $pass=htmlentities(mysqli_real_escape_string($con,$_POST['user_pass']));
    $email=htmlentities(mysqli_real_escape_string($con,$_POST['user_email']));
    $country=htmlentities(mysqli_real_escape_string($con,$_POST['user_country']));
    $gender=htmlentities(mysqli_real_escape_string($con,$_POST['user_gender']));

    if($name==''){
        echo"<script>alert('name field cannot empty')</script>";
    }
    if(strlen($pass)<8){
        echo"<script>alert('passsword should be greater than 8 chracter')</script>"; 
        exit();  
    }
    $check_mail = "select * from users where user_email= '$email'";
    $run_email=mysqli_query($con,$check_mail);

    $check = mysqli_num_rows($run_email);

    if($check==1)
    {
        echo"<script>alert('email already exits , pls try again')</script>";
        echo"<script>window.open('signup.php','_self')</script>";
        exit();
    }
    
    $insert = "insert into users (user_name, user_pass, user_email, country, gender) 
               values('$name', '$pass', '$email', '$country', '$gender')";
               $query=mysqli_query($con,$insert);
    if($query){
        echo"<script>alert('congrats $name yout account has been created succesfully')</script>";
        echo"<script>window.open('index.php', '_self')</script>";
            }
        else{
            echo"<script>alert('registration fail, try again')</script>";
            echo"<script>alert('window.open('signup.php','_self')</script>";
        }
}
