<?php

    session_start();
    header('Location:sign-up-in/signup.html');
    $con = mysqli_connect("localhost","root","Password","shopping_cart");
    if($con){
        echo "connection successful";
    }
    else{ echo "connection failed";}

    $name =$_POST['username'];
    $email =$_POST['email'];
    $password =$_POST['password'];

    $query = "SELECT * FROM user_data WHERE Username='$name' && Email='$email' && Password = '$password'";
    $result = mysqli_query($con,$query);
    $num = mysqli_num_rows($result);
    if($num==1){
        echo "this user is already exists";
    }
    else{
        $querr="INSERT INTO user_data(Username, Email, Password) VALUES($name,$email,$password);";
        mysqli_query($con,$querr);
    }
    ?>
