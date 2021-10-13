<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
*
{
    margin:0;
    padding:0;
    box-sizing:border-box;
    border-radius: 30px;
}
.input-container {
  display: -ms-flexbox;
  display: flex;
  width: 100%;
  margin-bottom: 15px;
}
.icon {
  padding: 10px;
  background:skyblue;
  color: white;
  min-width: 50px;
  text-align: left;
}
.input-field {
  width: 80%;
  padding: 10px;
  outline: none;
}
.input-field:focus {
  border: 2px solid skyblue;
}

/* Set a style for the submit button */
.btn {
  background-color: skyblue;
  color: black;
  padding: 15px 20px;
  border: none;
  cursor: pointer;
  width: 30%;
  margin-left: 10px;
    border-radius: 30px;
}
    

.btn:hover {
  opacity: 1;
}
</style>
<script type="text/javascript">
var myInput = document.getElementById("psw");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
}

  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }

  // Validate length
  if(myInput.value.length >= 10) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
  </script>
</head>
<body background="images/5.jpg">
<br><br><br><br><br>
<div class="user_card" style="margin-left: 50px;">
<form action="Dashb.php" method="POST" style="max-width:500px;margin:auto;">
  <h3>Fill in Form</h3>
    <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="Firstname" name="fname" required="">
  </div>
    <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="Lastname" name="lname" required="">
  </div>

  <div class="input-container">
    <i class="fa fa-envelope icon"></i>
    <input class="input-field" type="email" placeholder="Email" name="email" required="">
  </div>
    <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="Username" name="user" required="">
  </div>
  <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input class="input-field" type="password" placeholder="Password" name="pwd" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@#!$%^&*]).{10,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 10 or more characters" required="">
  </div>
 <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input class="input-field" type="password" placeholder="Confirm Password" name="cpwd" required="">
  </div>
  <button type="submit" class="btn">Register</button><br><br>
  <div class="mt-4">
         <div class="d-flex justify-content-center links">
            I already have an account !&nbsp; <a href="log.php" class="ml-2" style="color: blue;text-decoration: none;">Login here</a>
      </div> </div><br>
</form></div>

  <div id="message">
  <p id="letter" class="invalid"></p>
  <p id="capital" class="invalid"> </p>
  <p id="number" class="invalid"> </p>
  <p id="length" class="invalid"></p>
</div>
</body>
</html>
