<!DOCTYPE html> 
<html>
<link rel = "stylesheet" type = "text/css" href = "FinalStyle.css">
<head>
  <meta charset="utf-8" >
   <title>Metro Gun Club Scores</title>
   <style type="text/css">
      ol, ul { 
     list-style-type: none;
      }
   </style>
</head>
<h1 style="padding: 7px; border: 5px solid Black;Black; background-color:#ff8855; text-align:center "> Welcome To Metro Gun Club!
 <br> Home Page</h1>
<body>
<div id ="Nav">
<a href ="MetroGunClubFinal.php"> Home</a>
<a href ="Photo2.php"> Photos</a>
<a href ="Video2.php"> Videos</a>
<a href ="Leaderboard.php"> Leaderboard </a>
<a href ="FinalModify.php"> Leaderboard Modifications</a>
<a href ="FinalDelete.php"> Leaderboard Removal</a>
<a href ="SearchMe.php"> Leaderboard Search</a>
</div>

<form action="FinalHandler.php" method="POST">
<fieldset>
<div id= "PhotoArea">
<img id = "rcorners" src = "MetroLogo.jpg" style = "float: Right;" alt="Image not loaded" Width = "550" Hieght="550">
</div>

<div id = "photo area">
<h2><p style="padding: 10px; border: 5px solid Black; background-color:#ff8855; width : 55%" >
Please Insert The Shooters Information:
<ul>
<li>First Name:<input type = "text" name ="FirstName" > </li>
<li>Last Name :<input type = "text" name ="LastName"> </li>
<li>Address   :<input type = "text" name = "Address"> </li>
<li>City      :<input type = "text" name = "City"> </li>
<li>State     :<input type = "text" name ="State"> </li>
<li>Zip Code  :<input type = "text" name ="ZipCode"> </li>
</ul>
</h2>
</div>


<div id = "photo area">
<h2><p style="padding: 10px; border: 5px solid Black; background-color:#ff8855; width : 55%" >
Please Insert The Shooters Scores:
<ul>
<li>Singles :<input type = "Text" id ="Singles" name="Singles" min="0" max="1000"> </li>
<li>Handicap:<input type = "Text" id ="Handicap" name="Handicap" min="0" max="1000"> </li>
<li>Skeet   :<input type = "Text" id ="Skeet" name="SKeet" min="0" max="1000"> </li>
<li>Doubles :<input type = "Text" id ="Doubles" name="Doubles" min="0" max="1000"> </li>
<li>Shooting Class  :<input type = "text" name  = "ShootingClass"> </li>
</ul>
</h2>
</div>


<div id ="Title">
<p><input type="Submit" Name = "Submit" value = "Submit"> <input type ="reset" value = "Reset"> </p>
</div>
</fieldset>

</form>
</body>
</html>