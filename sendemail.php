<?php 
if (isset($_POST['sub'])) {
	$email=$_POST['email'];
	$a=0;
	include("connect.php");
	$sql="select* from account where email=?";
$stmt= mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt,$sql)) {
 echo "statement failed";
}
else{
  mysqli_stmt_bind_param($stmt,"s",$email);
  mysqli_stmt_execute($stmt);
  $select=mysqli_stmt_get_result($stmt);
  while($row=mysqli_fetch_assoc($select)) {
    if($row['Email']==$email)
    {
    $a=$a+1;
    $tokenemail=$row['Email'];
}
  }
}
  if($a>=1){
	$token=bin2hex(random_bytes(8));
	$token=random_bytes(32);
	$url="http://localhost/chriss/resetpass.php?token=$token";
	$expires=date("U")+1800;
     $sql="delete from rec where email=?";
     $stmt= mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt,$sql)) {
 echo "statement failed";
}
else{
  mysqli_stmt_bind_param($stmt,"s",$email);
  mysqli_stmt_execute($stmt);
}
$q="insert into rec(email,token) values(?,?)";
$stmt= mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt,$q)) {
 echo "statement failed";
}
else{
  mysqli_stmt_bind_param($stmt,"ss",$email,$token);
  mysqli_stmt_execute($stmt);   
}
$from = 'aimeempora@gmail.com';
$to = $email;
$subject = 'Reset password';
$message = '<p>Check the following link';
$message .= '<a href="'.$url.'</a></p>';
$headers = 'From: ' . $from;
$headers .= 'Reply-To: ' . $from;
$headers .= 'Content-type:text/html';
mail($to, $subject, $message, $headers);
header("Email sent successfuly");
}
else{
	header("Entered Email is not found!!");
}
}
?>