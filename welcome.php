<?php
session_start();
//create csrf token

if(isset($_POST) & !empty($_POST)){
  if(isset($_POST['csrf_token'])){
    if($_POST['csrf_token'] == $_SESSION['csrf_token']){
      //echo "CSRF Validation Success";
    }
    else {
      echo"CSRF Validation Failed.";
    }
  }
}
$token = md5(uniqid(rand(), true));
$_SESSION['csrf_token'] = $token;
$_SESSION['csrf_token_time'] = time();
?>

<?php 
if(!isset($_SESSION['Password'],$_SESSION['name'])){
	header("location:index.php");
}
$name=$_SESSION['name'];
$pwd=$_SESSION['Password'];

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Dashboard</title>
</head>
<style>
body {
  background-image: url('images/2.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
h1 {
  color: white;
}
</style>
<body>
<form method="post" action="logout.php">
<input type ="hidden" name="csrf_token" value="<?php echo $token; ?>">
<h1>Welcome Page</h1>
<input type="submit" name="logout" value="logout">
</form>
</body>
</html>
