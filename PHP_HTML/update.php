<!DOCTYPE html>
<html>
<head>
	<title></title>
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
<br>
    <hr></hr>

   <section id="update">
   	<table align="right" border="1" class="table2"> 
  <tr>
   
    <th>SID</th>
    <th>S_NAME</th>
    <th>ARTIST</th>
    <th>S_TYPE</th>
    <th>SELECT</th>
  </tr>
  <?php 
  $servername = "localhost";
  $username = "root";
  $password = "";
  $db = "musicapp";
  // Create connection
$conn = mysqli_connect($servername, $username, $password,$db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
	echo "Connected successfully";
?>
<form action='update.php' method='post'>
<?php 

$sql="SELECT SID,S_NAME,ARTIST,S_TYPE FROM playlist WHERE C_NAME = '$user' ";
$result=$conn->query($sql);
while($row=$result->fetch_assoc())
{
echo "<tr><td> " . $row["SID"]. "</td><td> " . $row["S_NAME"]. "</td><td>" . $row["ARTIST"]. "</td><td>" . $row["S_TYPE"] ."</td><td>"."<input type='checkbox' name='songs[]' id='song' value=".$row["SID"].">"."</td></tr>"."<br>";
}
 
?>
<button type="submit" class="sub">DELETE SELECTED</button>
</form>
   	 
   	</table>

   	<?php 
   foreach($_POST['songs'] as $ai){
$sql1= "SELECT* FROM songs WHERE SID='$ai'";
$result=$conn->query($sql1);
$row1=$result->fetch_assoc();
$sql = "DELETE  FROM playlist WHERE SID ='$ai' AND C_NAME = '$user';";

if ($conn->query($sql) === TRUE) {
    echo "record deleted!!";
   
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
?>
   </section>
    <script type="text/javascript">
  function openWin()
  {
    window.location.assign("http://localhost/DBMS/playlistf.php");
  }
</script>
</body>
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
         
         text-align: center;
         position:absolute;
        top:38%;
        left:5%;
        color:red;
    	font-weight:900;
    	
    	border-radius: 50px;
    	background-size:200% auto; 
      	margin:10px;
    	font-size:20px;
    	box-shadow:0 0 10px #000;
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
.mbtn2
  {
      border:none;
      cursor:pointer;
    position:absolute;
    top:20%;
    left:80%;
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
 .h1
  {
    position: absolute;
    left:50%;
    
  }
  .table1{
         padding : 20px 25px;
         width: 30%;
         height:10px;
         color: white;
         text-align: center;
         position:absolute;
         left:5%;
         top:60%;
  }
  .table2{
         padding : 20px 25px;
         width: 30%;
         height:50px;
         color: white;
         text-align: center;
         position:absolute;
        left: 33%;
         top:40%;
  }
.topnav {
  overflow: hidden;
  float: center;
  top:50%; 
  background-color: #cdcd45;
}
.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 30px;
  font-style: italic;
  font-weight: bold;
  position:center;
  
}
.search {
  overflow: hidden;
  float: center;
  top:50%; 
  background-color: #6778e9;
  padding: 20px 24px;
  left:50%;    
}
.search input{
    float: center;
    padding: 14px 16px;
    left:50%;
}

 </style>
</html>