<!DOCTYPE html>
<html>
<head>
<title>Music Web</title>
<link rel ="stylesheet" type ="text/css" href="">
</head>

<body>

<div class="box">
<button class="mbtn" value="Open Window" onclick="openWin()">Search</button>
<button class="mbtn1" onclick="openWin1()">Playlist</button>
<button class="mbtn2" onclick="openWin3()">Playsongs</button>
<button class="mbtn4" onclick="openWin4()">Upload Songs</button>
<button class="mbtn3" onclick="openWin2()">Logout</button>
<div class="tagline">

<h1>Music Web</h1>

</div> 

</body>
<h3 style="color: white"><?php
    session_start();
  $user= $_SESSION['logged'];
  echo "WELCOME  " . $user;
    ?></h3>
<script type="text/javascript">
	function openWin()
	{
		window.location.assign("http://localhost/DBMS/search1.php");
	}
	function openWin1()
	{
		window.location.assign("http://localhost/DBMS/playlistf.php");
	}
	function openWin2()
	{
		
		window.location.assign("http://localhost/DBMS/login.php");
	}
	function openWin3()
	{
		
		window.location.assign("http://localhost/DBMS/playsong.php");
	}
	function openWin4()
	{
		
		window.location.assign("http://localhost/DBMS/upload.php");
	}
</script>
<style type="text/css">

	h3{
		position: absolute;
		left: 10%;
		top: 20%;
	}
	
.box{
  background-image: url("headphone.jpg");
  background-size: cover;
  background-repeat:no-repeat;
  height:100vh; 
  position:relative;
}
.tagline{
position:absolute;
top:50%;
left:20%;
transform:translate(-50% ,-50%);
}
h1
{
font-size:5rem;
color:#fff;
}
p
{
text-align:centre;
color:#ddd;
}
.mbtn
{
border:none;
cursor:pointer;
position:absolute;
top:15%;
left:70%;
padding:20px ;
color:red;
font-weight:900;
text-align: left;
border-radius: 50px;
background-size:200% auto; 
margin:10px;
font-size:20px;
box-shadow:0 0 10px #000;

}
.mbtn1
{
border:none;
cursor:pointer;
position:absolute;
top:30%;
left:70%;
padding:20px;
color:red;
font-weight:900;
text-align: center;
border-radius: 50px;
background-size:200% auto; 
margin:10px;
font-size:20px;
box-shadow:0 0 10px #000;
}
.mbtn2
{
border:none;
cursor:pointer;
position:absolute;
top:45%;
left:70%;
padding:20px;
color:red	;
font-weight:900;
text-align: center;
border-radius: 50px;
background-size:200% auto; 
margin:10px;
font-size:20px;
box-shadow:0 0 10px #000;
}
.mbtn3
{
border:none;
cursor:pointer;
position:absolute;
top:75%;
left:70%;
padding:20px;
color:red	;
font-weight:900;
text-align: center;
border-radius: 50px;
background-size:200% auto; 
margin:10px;
font-size:20px;
box-shadow:0 0 10px #000;
}
.mbtn4
{
border:none;
cursor:pointer;
position:absolute;
top:60%;
left:70%;
padding:20px;
color:red	;
font-weight:900;
text-align: center;
border-radius: 50px;
background-size:200% auto; 
margin:10px;
font-size:20px;
box-shadow:0 0 10px #000;
}
</style>
</div>
</div>
</div>
</html> 