<?php

$servername= "localhost";
$username="root";
$password="";
$database="contact";

$conn= mysqli_connect($servername,$username,$password,$database);
if(!$conn)
    {
        die("Failed To Connect!". mysqli_connect_error());
    }
    else{
        echo("<br><center><b>Connected Successfully!</center></b></br>");
    }
    echo("<br>");
    $name=$_POST['nm'];
    $email=$_POST['em'];
    $message=$_POST['msg'];
    echo("<center><b>Thank You For Contacting With Us!</b></center>");
    echo("<br>");
    echo("<br>");
    echo("<center>Your Name is : \t");
    echo($name);
    echo("<br>");
    echo("Your Email is : \t");
    echo($email);
    echo("<br>");
    echo("Your Message : \t");
    echo($message);
    echo("<br></center>");
    echo("<br>");
    echo("<br>");
    echo("<center><b>We Will Get Back to You Very Soon!</b></center>");
    $sql="INSERT INTO `users` (`Name`, `Email`, `Message`) VALUES ('$name', '$email', '$message')";
    mysqli_query($conn,$sql);
?>