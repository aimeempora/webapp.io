<?php
session_start();
$name=$_POST['username'];
$pwd=$_POST['password'];
 $pass = sha1($_POST['password']);
$x=0;
$y=0;
include("connect.php");
$select=mysqli_query($conn,"select* from account");
while($user=mysqli_fetch_array($select))
{
if(($name==$user['Email'])&&($pass==$user['Password']) || ($name==$user['Username'])&&($pass==$user['Password']))
{
 $fst=$user['Username'];
  $eml=$user['Email'];
  $x=1;
  $_SESSION['name']=$name;
  $_SESSION['Password']=$pwd;
}
}
if($x)
{

  $query = "SELECT * FROM account WHERE status='Verified' ";
    $stmt = $conn->prepare($query);
    if($stmt->execute()){
    $result = $stmt->get_result();
    $num_rows = $result->num_rows;
}
if($num_rows > 0){
  if (!empty($_POST['remember'])) {
$check=$_POST['remember'];
   setcookie("name",$name,time()+3600*24*7);
   setcookie("password",$pwd,time()+3600*24*7);
   setcookie("check",$check,time()+3600*24*7);
  }
  else{
$check=0;
     setcookie("name",$name,7);
       setcookie("password",$pwd,7);
         setcookie("check",$check,7);
  }
//header("location:dashboard.php");
}
else{
  header("location:mailverify.php");
}
}

else{
  echo "incorect username or password";
}
?>
