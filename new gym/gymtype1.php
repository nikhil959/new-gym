<?php
$connect = mysqli_connect("localhost","root","","gym_management");
if(isset($_POST["inser_button"]))
{
	$sql = "CALL insertdata('".$_POST["gym_id"]."', '".$_POST["gym_type"]."')";
	if(mysqli_query($connect,$sql))
	{
		header("location:gymtype1.php?inserted=1");
	}
	
}
if(isset($_GET["inserted"]))
{
	echo'<script>alert("data inserted")</script>';
}
?>

 
   
   
<html>
<head>
<title> GYMTYPE</title>
<style>
body{
margin:0;
background:url('gympic.jpg');
background-size:cover;
}
.gym{
width:100%;
background:	#FFFF00;
height:206px;
margin-top:55px;
opacity:0.9;
}

.nav{
width:100%;
background:	#FFFF00;
height:110px;
margin-top:55px;
opacity:0.6;
}
ul
{
list-style:none;
padding:0;
margin:0;
position:responsive;
}
li{
float:left;
margin-top:30px;
}
a{
width:150px;
color:black;
display:inline;
text-decoration:none;
font-size:25px;
text-align:center;
padding:10px;
border-radius:10px;
font-family:Comic Sans MS;
font-weight:bold;
}
a:hover{
background:#FFFAF0;
transition:0.9s;
}
input[type=submit] {

background:url("button1.jpg");

}
</style>
</head>

<body>
<div class="nav">
<ul>
<li> <a href ="home.html">HOME</a></li>
<li> <a href ="user.html">USER</a></li>
<li> <a href ="trainer1.html">TRAINER</a></li>
<li> <a href ="member1.html">MEMBER</a></li>
<li> <a href ="payment1.html">PAYMENT</a></li>
<li> <a href ="gymtype1.html">GYM</a></li>
<li> <a href ="filter1.html">COMPLEX DATA FETCH</a></li>
<li> <a href ="about.html">ABOUT</a></li>></li>
</ul>
</div>

<div class="gym">
<center>
<h3>------------------------------------------------------------------------</h3>



			
<form method="post" action="">
				<p align="center"> 
					<label >Gym ID(*)</label>
					<input  name="gym_id" required="required" type="text" maxlength="10" placeholder="only 10 characters allowed"/>
				</p>
				<p align="center"> 
					<label >Gym Type</label>
					<input  name="gym_type" required="required" type="text" />
				</p>
				 
				
			<input name="inser_button" type="Submit" >
			
<h4>------------------------------------------------------------------------</h4>			
		</center>	
			</div>
			
</form>

</body>

</html>
