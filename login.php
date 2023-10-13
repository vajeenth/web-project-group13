<?php
    session_start();

   $conn= new mysqli ("localhost","root","","horror_signup");
    
    if ($_SERVER['REQUEST_METHOD'] == "POST"){
        $uname= $_POST['uname'];
        $password= $_POST['password'];

    $query = "select uname,password from signup where uname='$uname' and password = '$password'";
    $result = mysqli_query($conn, $query);
    if($result){
        if($result && mysqli_num_rows($result)>0){
            $signup = mysqli_fetch_assoc($result);
            if($signup['password'] == $password){
               header('location:index.html');
               //header("C:\xampp\htdocs\horror project\INDEX\index.html");
                die;
            }
        }
        echo "<script type='text/javascript'> alert('Wrong user name or password 1 !')</script>";
    }
    else{
        echo "<script type='text/javascript'> alert('Wrong user name or password 2 !')</script>";
    }
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
   
    <title>HELL HOUSE</title>
    <link rel="stylesheet" type="text/css" href="login.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body background="homebg2.jpg">
    
    <marquee behavior="slide" direction="left" scrollamount="250"scrolldelay="10" width="100%" height="30%" >
     <center>
        <h1 style="font-family:chiller; font-size:xxx-large;font-weight:bold;">HELL HOUSE</h1>
    </center>
    </marquee>
<marquee behavior="slide" direction="top" scrollamount="150" scrolldelay="10" width="100%" height="30%" >  
<div class="form">
    <center>
    <form action="login.php" method="POST">

        <label for="username"style="color:red;">Username</label>
        <input type="text" Id="username" placeholder="username....." name="uname">
        <br>
        <br>
        <label for="password"style="color:red;">Your password</label>
        <input type="password" Id=" password" placeholder="Your Password....." name="password">
        <br>
        <a href="signup.html">signup</a>

        <br>
        <center>
        <button type="submit"><span>Login</span></button>
        </center>
          
</div>
</marquee>

    <center>
        <h2 style="font-family:chiller; font-size:xxx-large;font-weight:bold;">Don't Go Alone</h2>
        <img src="loginlogo.png" alt="alternative text" width="25%" height="30%" >
    </center>

    </form>
</body>
</html>