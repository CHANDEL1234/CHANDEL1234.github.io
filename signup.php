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
    echo "Connected";
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

    $email = validate($_POST['email']);

    if (empty($uname)) {

        echo "<script type='text/javascript'>if(window.confirm('Enter the username')){window.location.href='signup.html'};</script>";

        exit();

    }else if(empty($pass)){

        echo "<script type='text/javascript'>if(window.confirm('Enter the Password')){window.location.href='signup.html'};</script>";

        exit();
    

    }else if(empty($email)){
        echo "<script type='text/javascript'>if(window.confirm('Enter the email')){window.location.href='signup.html'};</script>";

    }
    else{

        $sql = "SELECT * FROM users_data WHERE uname='$uname' AND email='$email' AND password='$pass'";

        $result = mysqli_query($conn, $sql);
        
        

        if (mysqli_num_rows($result) === 1) {
            

            $row = mysqli_fetch_assoc($result);

            if ($row['uname'] === $uname && $row['password'] === $pass && $row['email'] === $email) {

                echo "<script type='text/javascript'>if(window.confirm('This user already exist, try login')){window.location.href='login.html'};</script>";}

            }
            else{
                if(isset($_POST['submit']))
{
	$name = $_POST['uname'];
	
	
	$email = $_POST['email'];
	
	$password = $_POST['password'];
	$result = mysqli_query($conn,"insert into users_data values('$name','$password','$email')");
	if($result)
	{
		echo "<script type='text/javascript'>if(window.confirm('Registered successfully, press ok to login')){window.location.href='login.html'};</script>";
	}
	else{
		echo "failed:";
	}
}
                }}}

?>