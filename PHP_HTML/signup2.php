<html>
<body>
<form  style="border:1px solid #ccc" method="post">
  <div class="container">
    <left><h1 style="color: white">Music Web</h1></left>
    <left><h5 style="color: red"> The All in One Music App</h5></left>
      <h2 style="color: red"><center>Sign Up Page</center></h2>
    <p align="center" style="color: white">Please fill in this form to create an account.</p>
    <hr>

    <label for="name" style="color: white"><b>Customer Name</b></label>
    <input type="text" placeholder="Enter Customer Name" name="name" required>

    <label for="username" style="color: white"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label for="psw" style="color: white"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <label for="psw-repeat" style="color: white"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" required>

    <label style="color: white">
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>

    <p style="color: white">By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix">
      <button type="button" class="cancelbtn" onclick="openWin2()">Cancel</button>
      <button type="submit" class="signupbtn" onclick="openWin()">Sign Up</button>
    </div>
  </div>
</form>


  
</body>
<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $db = "musicapp";
  $conn = mysqli_connect($servername, $username, $password,$db);
   if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
   echo "Connected successfully";
   if(isset($_POST['name']) && isset($_POST['username']) && isset($_POST['psw']))
   {
   $name=$_POST['name'];
   $usern=$_POST['username'];
   $passw=$_POST['psw'];
   $a=rand(0,10000);
   $sql = "INSERT INTO customer (CID,C_NAME,USER_NAME,PASSWORD)
VALUES ($a, '$name', '$usern','$passw')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
 
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}}

?>
  <script type="text/javascript">
  function openWin()
  {
    window.open("http://localhost/sublime.html");
  }
  function openWin2()
  {
    window.open("http://localhost/login.php")
  }
</script>

<style type="text/css">
/* Full-width input fields */
body{
    background-image: url("headphone.jpg");
  }

  input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
    width: 100%;
  }
}

h1{
  color:red;
  font-family: "Times New Roman", Times, serif;
  font-size: 60px;
  font-weight: bold;

}
p{
  color:black;
  font-family: "Times New Roman", Times, serif;
  font-size: 20px;
  font-weight: normal;
}
h2{
  color:blue;
   font-family: "Times New Roman", Times, serif;
  font-size: 40px;
  font-weight: bold;
}
h5{
  color:blue;
   font-family: "Times New Roman", Times, serif;
  font-size: 20px;
  font-style: italic;
  font-weight: bold;
  padding-left:35px;

}
</style>
</html>