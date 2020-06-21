<!DOCTYPE html>
<html>
<h1 align="center">Music Web</h1>
<h5 align="center"> The All in One Music App</h5>
<h3 style="color: white">WELCOME <?php
  session_start();
  echo $_SESSION['logged'];
?></h3>
<button class="mbtn" onclick="openWin()">BACK</button>
<script type="text/javascript">
  function openWin()
  {
    window.location.assign("http://localhost/DBMS/sublime.php");
  }
</script>
<body>

<hr>
<hr>

<div class="search" name="type" align="center">
 <form action="search1.php" method="post">
  <input type=text placeholder="Search by Song Type" name="search1">
  

  <input type=text placeholder="Search by Song Name" name="search2">
 

  <input type=text placeholder="Search by Artist Name" name="search3">
 

  <input type=text placeholder="Search by Album" name="search4">
  <input type=submit>
 </form>
</div>

<table class="table" align="center" border="1"> 
  <tr>
    <th>SID</th>
    <th>S_NAME</th>
    <th>S_TYPE</th>
    <th>ARTIST</th>
    <th>ALBUM</th>
    
   
  </tr>

<hr></hr>
<hr></hr>
<?php

  
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

if(isset($_POST['search1']))
{
 
  $searcha = $_POST['search1'];
  $searchb = $_POST['search2'];
  $searchc = $_POST['search3'];
  $searchd = $_POST['search4'];
  $sql = " SELECT* FROM songs WHERE S_TYPE='$searcha' OR S_NAME='$searchb' OR ARTIST='$searchc' OR ALBUM='$searchd'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) 
  {
    
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td> " . $row["SID"]. "</td><td> " . $row["S_NAME"]. "</td><td>" . $row["S_TYPE"]."</td><td>" . $row["ARTIST"] ."</td><td>". $row["ALBUM"] . "</td></tr>". "<br>";
  }}
  }
?>
</table>

</body>
<style>
  h1{
  color:white;
  font-family: "Times New Roman", Times, serif;
  font-size: 60px;
  font-weight: bold;
  }

  h5{
   color:red;
   font-family: "Times New Roman", Times, serif;
   font-size: 20px;
   font-style: italic;
   font-weight: bold;
   padding-left:5px;
  }

  body{
    background-image: url("headphone.jpg");
  }

 .h1
  {
    position: absolute;
    left:50%;
    
  }
  .table{
         padding : 20px 25px;
         width:30%;
         height:50px;
         text-align: center;
         color: white;
         border-width: medium;
         position: absolute;
         left:35%;
         top: 60%;

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
  left:75%;    
}
.search input{
    float: center;
    padding: 14px 16px;
    left:50%;
}

 </style>
</html>