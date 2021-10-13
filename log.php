<?php
session_start();
//create csrf token

if(isset($_POST) & !empty($_POST)){
  if(isset($_POST['csrf_token'])){
    if($_POST['csrf_token'] == $_SESSION['csrf_token']){
      //echo "CSRF Validation Success";
    }
    else {
      //echo"CSRF Validation Failed.";
    }
  }
}
$token = md5(uniqid(rand(), true));
$_SESSION['csrf_token'] = $token;
$_SESSION['csrf_token_time'] = time();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Login form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=devive-width,initial-scale=1.0">
<style>
body {
  font-family: Arial, Helvetica, sans-serif; 
  background-image: url('images/2.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;  
background-position: left;
background-size: cover;
position: absolute;
}
* {
  box-sizing: border-box;
  border-radius: 30px;  
}
.input-container {
  display: -ms-flexbox;
  display: flex;
  width: 100%;
  margin-bottom: 15px;
}
.input-field {
  width: 70%;
  padding: 10px;
  outline: none;
}
.input-field:focus {
  border: 2px solid white;
}
  </style>
</head>
<body >
  <div class="container h-100">
    <div class="d-flex justify-content-center h-100" >
      <div class="user_card">
        <div class="d-flex justify-content-center form_container">
          <form method="post" action="login.php" style="margin-left: 10cm;"><br><br><br><br>
          <input type ="hidden" name="csrf_token" value="<?php echo $token; ?>">
         <h1 style="margin-left:5cm;">WEB Application</h1>
            <section></section>
           <div class="input-group mb-3">
            <div class="input-container">
    <i class="fa fa-user icon"></i>
   Enter Username: <input class="input-field" type="text" placeholder="Enter username" name="username" required="" value="<?php if(isset($_COOKIE['name'])){echo $_COOKIE['name'];} ?>">
  </div>
  <div class="input-container">
    <i class="fa fa-key icon"></i>
    Enter password: <input class="input-field" type="password" placeholder="Enter Password" name="password" required="" value="<?php if(isset($_COOKIE['password'])){ echo $_COOKIE['password'];} ?>">
  </div>
            <div class="form-group">
                     &nbsp;&nbsp;&nbsp;&nbsp; <input type="checkbox" value="lsRememberMe" id="rememberMe" name="remember" <?php if(isset($_COOKIE['check'])){echo 'checked';} ?>> <label for="rememberMe">Remember me</label><br>
              <input type="hidden" name="token" value="">
            </div><br><br> 
              <div class="d-flex justify-content-center mt-3 login_container" style="margin-top">
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<c> <input type="submit" name="sub" value="Login" class="btn" style="background-color: skyblue;height: 1cm;width: 4cm;" ></c></div>
           </div>
            </form>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Forgot Password <a href="emailchck.php" style="text-decoration: none;"><button><b>Recover</b></button></a><br><br>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I don't have an account <a href="createuser.php" style="text-decoration: none;"><button><b>Signup</b></button></a>
        </div>
    <br>
      </div>
    </div>
  </div>
</body>
</html>

