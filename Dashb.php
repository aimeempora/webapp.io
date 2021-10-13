<?php 
session_start();
include "connect.php";
$fname=$_POST['fname'];
$lname=$_POST['lname'];
 $user=$_POST['user'];
 $email=$_POST['email'];
 $hashed_pass = sha1($_POST['password']);
 $otp = mt_rand(100000, 999999);
 $status="Not verfied";
 $sql="insert into account values(null,?,?,?,?,?,?,?)";
/*  
$stmti = $db->prepare($query);
$stmti->bind_param('sssis',$username,$password,$email,$otp,$status);
$stmti->execute();
$stmti->close();
    $_SESSION['username'] = $username;
    $_SESSION['pwd'] = $password;
    $_SESSION['em'] = $email;
    $_SESSION['code'] = $otp;
    //$_SESSION['stat'] = $status;
    $to=$email;
    $from="From: viateurvnshimiyimana@gmail.com";
    $subject="Verification Code for Viateur Website";
    $message =$otp;
    $mailing = mail($to,$subject,$message,$from);

    header('location: verify_email.php');
    ?>
*/

$st=mysqli_stmt_init($conn);
if(mysqli_stmt_prepare($st,$sql))
{
    //echo "<script>alert('Account Created Succusfull! Click ok to login.')</script>";
    //include "index.php";
mysqli_stmt_bind_param($st,"sssssss",$fname,$lname,$user,$email,$hashed_pass,$otp,$status);
mysqli_stmt_execute($st);

$to=$email;
$from="From: aimeempora@gmail.com";
$subject="Verification Code ";
$message =$otp;
$mailing = mail($to,$subject,$message,$from);

header('location: otp.php');

}
else{
    echo "<script>alert('Failed to create an account!... Try again please!')</script>";
    include "createuser.php"; 
echo "error:".$sql."<br>".$conn->error;
}
?>