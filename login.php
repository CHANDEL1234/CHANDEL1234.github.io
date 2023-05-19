<?php
   
$sname= "localhost";
$uname= "root";
$password= "Password";
$db_name= "user_data";
$conn=mysqli_connect($sname, $uname, $password, $db_name);
if(!$conn){
    echo "Couldn't connect";
}
else{
    echo "connection established";
}
session_start(); 



if (isset($_POST['uname']) && isset($_POST['password'])) {

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

    $uname = validate($_POST['uname']);

    $pass = validate($_POST['password']);

    if (empty($uname)) {

        echo "<script type='text/javascript'>if(window.confirm('Enter the username')){window.location.href='login.html'};</script>";

        exit();

    }else if(empty($pass)){

        echo "<script type='text/javascript'>if(window.confirm('Enter the Password')){window.location.href='login.html'};</script>";

        exit();

    }else{

        $sql = "SELECT * FROM users_data WHERE uname='$uname' AND password='$pass'";

        $result = mysqli_query($conn, $sql);
        

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['uname'] === $uname && $row['password'] === $pass) {

                echo "Logged in!";

                $_SESSION['user_name'] = $row['user_name'];

                $_SESSION['uname'] = $row['uname'];

                $_SESSION['id'] = $row['id'];

                header("Location:index.php");

                exit();

            }else{

                echo "<script type='text/javascript'>if(window.confirm('invalid credentials, press ok to try again')){window.location.href='login.html'};</script>";
                exit();

            }

        }else{

            echo "<script type='text/javascript'>if(window.confirm('invalid credentials, press ok to try again')){window.location.href='login.html'};</script>  ";
            

            exit();

        }

    }

}else{

    header("Location: index.html");

    exit();

}
?>
