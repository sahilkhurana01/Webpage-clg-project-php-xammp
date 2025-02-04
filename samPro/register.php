<?php 

include 'connect.php';

if(isset($_POST['signUp'])){
    $fName=$_POST['firstName'];
    $lName=$_POST['lastName'];
    $mail=$_POST['email'];
    $pasw=$_POST['password'];
    $pasw=md5($pasw);

     $checkEmail="SELECT * From users where email='$mail' ";
     $result=$conn->query($checkEmail);
     if($result->num_rows>0){
        echo "Email Address Already Exists !";
     }
     else{
        $insertQuery="INSERT INTO users(firstName,lastName,email,password)
                        VALUES ('$fName','$lName','$mail','$pasw')";
            if($conn->query($insertQuery)==TRUE){
                header("Location: index.php");
            }
            else{
                echo "Error:".$conn->error;
            }
     }
   

}

if(isset($_POST['signIn'])){
   $mail=$_POST['email'];
   $pasw=$_POST['password'];
   $pasw=md5($pasw) ;
   
   $sql="SELECT * FROM users WHERE email='$mail' and password='$pasw'";
   $result=$conn->query($sql);
   if($result->num_rows>0){
    session_start();
    $row=$result->fetch_assoc();
    $_SESSION['email']=$row['email'];
    header("Location: dashboard.php");
    exit();
   }
   else{
    header("Location: loginF.php");
   }

}
?>