<?php

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

if (isset($_POST['submit'])) {
    $age=($_POST['age']);
    if($age<=18){
        $myfile = fopen("selectop.html", "r") or die("Unable to open file!");
        echo fread($myfile,filesize("selectop.html"));
        fclose($myfile);
        

    }else{
        
    }
}
}