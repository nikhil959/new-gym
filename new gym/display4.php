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

$sql = "SELECT * FROM gymtype1" ;
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


<h1 align="center">GYM TYPE DETAILS</h1>

<table border="1" style="width:600px; margin:auto; color:black; padding:" align="center"  style="line-height:25px;">
<tr>
<th>gym id</th>
<th>gym type</th>
</tr>



<?php
if($result->num_rows >0){
	while($row=$result->fetch_assoc()){
		?>
<tr>
<td><?php echo $row['gym_id'];?></td>
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
