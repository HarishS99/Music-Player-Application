<!DOCTYPE html>
<html>
<head>
    <title>UPLOAD SONGS</title>
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

    <section id="upld">
        <h2>CHOOSE FILE TO INSERT</h2>
       <form method="post" enctype="multipart/form-data" action="upload2.php">

    <label for="file"></label>

    <input type="file" name="file" id="file" />

    <br />
    <input type="submit" name="submit" value="Submit" />
</form>
    </section>
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
 #upld
 {
    position: absolute;
    top: 40%;
    left: 28%;
    padding: 60px 150px;
    text-align: center;
    border-radius: 30px;
    background-color: white;
    box-shadow:10px 10px 10px;
    color: black;
    font-family: "Times New Roman", Times, serif;
    font-style: italic;
 }
</style>

    </body>
</html>
