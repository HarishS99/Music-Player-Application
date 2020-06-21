<html>
<head>
<script type="text/javascript" src="player.js"></script>
<link rel="stylesheet" type="text/css" href="player.css">
</head>
<body>
	<br>
    <h1 align="center" style="padding-left: 50px">MUSIC WEB </h1>
    <h4 align="center" style="padding-left: 55px">The All in One Music App</h4>
    <h3 align="left"><?php
    session_start();
  $user= $_SESSION['logged'];
  echo "WELCOME  " . $user;
    ?></h3>
    
    <button class="mbtn" onclick="openWin()">BACK</button>
  
    <br/>
    <hr></hr>

  
<table align="center" border="1" class="table2" style="color: white"> 
  <tr>
   
    <th>SID</th>
    <th>S_NAME</th>
    <th>ARTIST</th>
    <th>S_TYPE</th>
    <th>PLAY LINK </th>
  </tr>
    <<?php 
  $servername = "localhost";
  $username = "root";
  $password = "";
  $db = "musicapp";
  $search;


// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql="SELECT playlist.SID,playlist.S_NAME,playlist.ARTIST,playlist.S_TYPE,play.FILENAME FROM playlist,play WHERE playlist.C_NAME = '$user' AND playlist.SID = play.SID ";
$result=$conn->query($sql);
while($row=$result->fetch_assoc())
{
echo "<tr><td>" . $row["SID"]. "</td><td>" . $row["S_NAME"]. "</td><td>" . $row["ARTIST"]. "</td><td>" . $row["S_TYPE"] ."</td><td>".'<a href ="player.php?name='.$row["FILENAME"].'">'. $row["FILENAME"].'</a>'."</td></tr>"."<br>";
}
     
   
   

 ?>
</table>
<script type="text/javascript">
	function openWin()
	{
		window.location.assign("http://localhost/DBMS/sublime.php");
	}
</script>
<style>
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
      body{
        background-image: url("headphone.jpg");
        
      }
      h5{
        padding: 20px 70px;
        color: white;
        font-family: "Times New Roman", Times, serif;
        font-style: normal;
        font-weight: bold;
        position:absolute;
        top:40%;
        
      }
      h3{
        padding: 20px 70px;
        color: white;
        font-family: "Times New Roman", Times, serif;
        font-style: normal;
        font-weight: bold;
      }
  .sub{
        padding : 20px 20px;
         width: 20%;
         height:10px;
         text-align: center;
         position:absolute;
        top:18%;
        left:87%;
      }
.mbtn
  {
      border:none;
      cursor:pointer;
    position:absolute;
    top:20%;
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
</style>
</html>