<?php 
if (isset($_POST['sub'])) {
	$sel=$_POST['token'];
  $a=0;
	$password=$_POST['pwd'];
	$passwordrepeat=$_POST['pss'];
	if (empty($password) || empty($passwordrepeat)) {
		header("location:respass.php");
	}
	else if ($password!=$passwordrepeat) {
    echo '<script language="javascript">';
echo 'alert("Password are not matching");';
echo "\n";
header("location:respass.php?token=$sel");
echo '</script>';
exit();

	require "connect.php";

$sql="select* from rec where token=?";
$stmt= mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt,$sql)) {
 echo "statement failed";
}
else{
  mysqli_stmt_bind_param($stmt,"s",$sl);
  mysqli_stmt_execute($stmt);
  $select=mysqli_stmt_get_result($stmt);
  while($row=mysqli_fetch_assoc($select)) {
    if($row['token']==$sl)
    {
    $a=$a+1;
    $tokenemail=$row['token'];
}
  }
  if ($a<1) {
 echo "you need to re-submit your request";
  }
  else
  {
$sql="select* from rec where email=?";
$stmt= mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt,$sql)) {
 echo "statement failed";
}
else{
  mysqli_stmt_bind_param($stmt,"s",$tokenemail);
  mysqli_stmt_execute($stmt);
  $select=mysqli_stmt_get_result($stmt);
  if (!$row=mysqli_fetch_assoc($select)) {
  	echo "There is an error!";
  }
  else
  {
  $sql="UPDATE account set Password=? where Email=?";
  $stmt= mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt,$sql)) {
 echo "statement failed";
}
else{
	$newpwdhash=sha1($passwordrepeat);
  mysqli_stmt_bind_param($stmt,"ss",$newpwdhash,$tokenemail);
  mysqli_stmt_execute($stmt);
  $sql="delete from rec where email=?";
     $stmt= mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt,$sql)) {
 echo "statement failed";//1234567890!Qw
}
else{
  mysqli_stmt_bind_param($stmt,"s",$token);
  mysqli_stmt_execute($stmt);
  header("location:log.php");
}	
  }
  	}
}
}}}
else
{
	header("location:log.php");
}
}
?>