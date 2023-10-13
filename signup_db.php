<?php

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$password=$_POST['password'];
$uname=$_POST['uname'];

if(!empty($fname)||!empty($lname)||!empty($email)||!empty($password)||!empty($uname))
{
    $host="localhost";
    $dbusername="root";
    $dbpassword="";
    $dbname="horror_signup"; 

    //create connection
    $conn=new mysqli ($host,$dbusername,$dbpassword,$dbname);

    if(mysqli_connect_error()){
        die('Connect Error ('.
        mysqli_connect_errno() .')'
        .mysqli_connect_error());
    }
    else{
        $SELECT="SELECT uname from signup where uname =? Limit 1";
        $INSERT="INSERT into signup (fname,lname,email,password,uname) values(?,?,?,?,?)";

        //Prepare statement
        $stmt=$conn->prepare($SELECT);
        $stmt->bind_param("s",$uname);
        $stmt->execute();
        $stmt->bind_result($uname);
        $stmt->store_result();
        $rnum=$stmt->num_rows();

        //Checking username
        if($rnum==0){
            $stmt->close();
            $stmt=$conn->prepare($INSERT);
            $stmt->bind_param("sssss",$fname,$lname,$email,$password,$uname);
            $stmt->execute();
            
           header('Location:index.html');
            
            //header("C:\xampp\htdocs\horror project\homepage\webpage1.html");
            
           
        }else{
            
            echo "<script type='text/javascript'> alert('Someone already registered using this Username! Try An Other Name')</script>";
        }
        $stmt->close();
        $conn->close();
        }
   
        die();
    }

?>