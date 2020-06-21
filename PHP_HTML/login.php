<!DOCTYPE html>
<html>
<head>
	<title>LOGIN PAGE</title>
</head>
<body>
		<br>
		<h1 align="center" style="padding-left: 50px">MUSIC WEB </h1>
		<h4 align="center" style="padding-left: 55px">The All in One Music App</h4>
		<br  />
		<hr height ="30px">
	<div id="frm" align="left">
		<h3 align="center" style="color: red">Login Here</h3>
		
		<form method="post"  >
			<p>
				<label style="color: white">Username:</label>
				<input type="text" id="user" name="user" \>
			</p>
			<p>
				<label style="color: white">Password:</label>
				<input type="password" id="pass" name="pass" \>
			</p>
			<p>
				
				<input type="submit" id="btn" value="LOGIN" \>
			
				<input type="submit" id="btn2" value="SIGN-UP" onclick="openWin()">
			</p>
		</form>
	</div>
	<script type="text/javascript">
		function openWin()
	{
		window.location.assign("http://localhost/signup2.php");
	}
	</script>
</body>

<?php
   session_start();
  $servername = "localhost";
  $username = "root";
  $password = "";
  $db = "musicapp";
  $conn = mysqli_connect($servername, $username, $password,$db);
   if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
   //echo "Connected successfully";

 if (isset($_POST['user']) && isset($_POST['pass']) ) 
 {
 	
 	$usern=$_POST['user'];
    $passw=$_POST['pass'];
    $sql = "SELECT * FROM customer WHERE USER_NAME = '$usern' AND PASSWORD = '$passw' ";
    $result = $conn->query($sql);
    $count  = $result->num_rows;
	if ( $count == 1)
	{
		$_SESSION['logged']= $usern;
		header("location: sublime.php");
		echo "LOGIN SUCCESSFULL";
		echo "<script>window.location.assign('sublime.php');</script>";
  	}
  	else{

		
		echo "<script>window.location.assign('login.php');alert('Error: Please enter correct username/password!');</script>";
	}
   
}


    

?>





<style type="text/css">
			h1{
				color: white;
				padding-right: 125px
				font-family: "Times New Roman", Times, serif;
				font-style: normal;
				font-weight: bold;
			}
			h4{
				color: red;
				padding-right: 125px
				font-family: "Times New Roman", Times, serif;
				font-style: italic;
				font-weight: bold;
			}
			img{
				padding-left: 125px
			}
			body{
				background-image: url("headphone.jpg");
				
			}
			#frm{
				border: solid grey 1px;
				width: 10%
				border-radius: 5px;
				margin: 100px ;
				margin-left: 5%;
				margin-right: 75%;
				padding-left: 30px;
			}
			#btn
			{
				color: #fff;
				background: #337ab7;
				padding: 5px;
				margin-left: 10%;
			}
			#btn2{
				color: #fff;
				background: #337ab7;
				padding: 5px;
				margin-left: 20%;

			}
</style>

</html>