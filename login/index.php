<?php
session_start();
$uname=$_POST['uname'];
$pass=$_POST['password'];
// echo("$uname");
$con = new mysqli("localhost","root","","attendance");
if($con->connect_error){
    die("Failed to connect :");
}

else{
  $sq = " SELECT * FROM login WHERE username ='$uname' AND password1 ='$pass'";
  $result=mysqli_query($con,$sq);
  $row = mysqli_fetch_array($)
  if(mysqli_num_rows($result )=== 1){
    $row = mysqli_fetch_assoc($result);
    if($row['username'] === $uname && $row['password'] === $pass ){
        echo("success");
    }
    else{
        echo("unsuujk");
    }
  }

}



?>