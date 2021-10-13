
<!DOCTYPE html>
<html>
<head>
  <title>Reset password</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=devive-width,initial-scale=1.0">
<style>
body {
  font-family: Arial, Helvetica, sans-serif; 
  background-image: url('images/2.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
* {
  box-sizing: border-box;
  border-radius: 30px;
}
.input-container {
  display: -ms-flexbox;
  display: flex;
    margin-bottom: 15px;
  width: 80%;
  
}
.input-field {
  width: 70%;
  padding: 10px;
  outline: none;
}
.input-field:focus {
  border: 2px solid lightblue;
}
  </style>
</head>
<body >
    <?php
    $token=$_GET['token'];
    if (empty($token))
    {
        echo"Could not progress ";
    }
    else{
            ?>
  <div class="container h-100">
    <div class="d-flex justify-content-center h-100" >
      <div class="user_card">
        <div class="d-flex justify-content-center form_container">
          <form method="post" action="resetpassword.php" style="margin-left: 10cm;"><br><br><br><br>
          <input type ="hidden" name="selector" value="<?php echo $sel; ?>">
         <h1 style="margin-left:5cm;">Reset Password</h1>
            <section></section>
           <div class="input-group mb-3">
            <div class="input-container">
    <i class="fa fa-user icon"></i>

    <input class="input-field" type="password" placeholder="Enter new Passwword" name="pwd" required="" value="">
  </div>
  <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input class="input-field" type="password" placeholder="Confirm Password" name="ps" required="" value="">
  </div>
              <div class="d-flex justify-content-center mt-3 login_container" style="margin-top">
          <c> <input type="submit" name="sub" value="Submit" class="btn" style="background-color: skyblue;height: 1cm;width: 4cm;" ><br><br>
                  </c></div></div>
        </form> 
        <?php }?>  
        </div>
    <br>
      </div>
    </div>
  </div>
</body>
</html>

