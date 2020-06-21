<html>
<head>
<script type="text/javascript" src="player.js"></script>
<link rel="stylesheet" type="text/css" href="player.css">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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
    <h3 align="center"><?php
    
  $user= $_SESSION['logged'];
  $now= $_GET['name'];
  echo  " NOW PLAYING "  .$now;
    ?></h3>

<script type="text/javascript">
  function openWin()
  {
    window.location.assign("http://localhost/DBMS/playsong.php");
  }
</script>
<div id="wrapper">
<div id='player'>
<audio id="music_player">
<source src="<?php echo $now ?>"/>
</audio>

<i class="fa fa-play" onclick="play_aud()" id="play_button"></i>
<i class="fa fa-pause" onclick="pause_aud()" id="play_button"></i>
<i class="fa fa-stop" onclick="stop_aud()" id="play_button" ></i>

<i class="fa fa-volume-up" id="vol_img"></i>
<input type="range" id="change_vol" onchange="change_vol()" step="0.05" min="0" max="1" value="1">
</div>
</div>
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