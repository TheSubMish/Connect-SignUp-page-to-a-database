<?php
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $servername="localhost";
        $username="root";
        $password="";
        $database="submish";

        $conn=mysqli_connect($servername, $username, $password, $database);

        if(!$conn){
            die("Connection was not established ".mysqli_connect_error());
        }
        //Creating database name "submish"
        // $sql="CREATE DATABASE submish";
        // $result=mysqli_query($conn, $sql);

        // if(!$result){
        //     die("Database was not created.");
        // }

        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $mail=$_POST['mail'];
        $pass=$_POST['password'];

        $sql="INSERT INTO `signup` (`First Name`, `Last Name`, `Email`, `Password`) VALUES ('$fname', '$lname', '$mail', '$pass')";
        $result=mysqli_query($conn, $sql);
        if(!$result){
            die("Data are not stored in database");
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="signUp.css">
    <title>Sign-Up</title>
</head>
<body>
    <div id="container">
        <div id="sec1">
            <h1 id="title">Sign Up</h1>
        </div>
        <div id="sec2">
            <form action="#" id="sign" method="post">
                <div class="form">
                    <p class="label">First Name</p>
                    <input type="text" name="fname" id="fname">
                </div>
                <div class="form">
                    <p class="label">Last Name</p>
                    <input type="text" name="lname" id="lname">
                </div>
                <div class="form">
                    <p class="label">E-mail</p>
                    <input type="email" name="mail" id="mail">
                </div>
                <div class="form">
                    <p class="label">Password</p>
                    <input type="password" name="password" id="pass">
                </div>
                <div class="form">
                    <p class="log">Already Have a account? <a href="#" id="login">Log-in</a></p>
                </div>
                <div class="form">
                    <button type="submit" id="sub">Create Account</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>