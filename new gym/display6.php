<?php
$host="localhost";
					 $dbusername="root";
					 $dbpassword="";
					 $dbname="gym_management";
					 //create connection
					 	 $conn = new mysqli($host,$dbusername,$dbpassword,$dbname);
					 if(mysqli_connect_error()){
						 die('connect error('.mysqli_connect_errno().')'
						 .mysqli_connect_error());
					 }

$sql = "SELECT member_id, 
               member_name, 
			   member_email,
			   member_phonenumber,
			   gym_type
			   FROM member1 JOIN gymtype1
			   ON gymtype1.gym_id=member1.member_id";
			   
			   
			    
$result=$conn->query($sql);

?>
<!doctype html>
<html>
<style>
body{
margin:0;
background:url('yellow.png');
background-size:cover;
font-family:Comic Sans MS;
}





</style>
<body>


<h1 align="center">MEMBER'S WITH THERE GYM TYPE</h1>

<table border="1" style="width:600px; margin:auto; color:black; padding:" align="center"  style="line-height:25px;">
<tr>
<th>MEMBER ID</th>
<th>MEMBER NAME</th>
<th>MEMBER EMAIL</th>
<th>MEMBER PHONE NUMBER</th>
<th>GYM TYPE</th>

</tr>



<?php
if($result->num_rows >0){
	while($row=$result->fetch_assoc()){
		?>
<tr>
<td><?php echo $row['member_id'];?></td>
<td><?php echo $row['member_name'];?></td>
<td><?php echo $row['member_email'];?></td>
<td><?php echo $row['member_phonenumber'];?></td>
<td><?php echo $row['gym_type'];?></td>


</tr>

<?php
	}
}
else
{
	?>
<tr>
<th column="2"> there's no data found!!!</th>
</tr>
<?php
}
?>

</table>

</body>
</html>
